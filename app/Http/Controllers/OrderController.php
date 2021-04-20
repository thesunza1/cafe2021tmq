<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Table;
use App\Order;
use App\OrderItem;
use carbon\Carbon;
use Hamcrest\Number\OrderingComparison;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request ) {

        $input = $request->all();
        //gan vao bien
        $table_id = $input['Ntable'];
        $table_status = $input['idstatus'];

        $drinks_id = $input['drk_id'] ;
        $drinks_quanitity = $input['quanitity'] ;
        $drinks_status = $input['status'] ;
        $drinks_len = count($drinks_id);
        $drinks_price = array();
        $drinks_totalprice = array();
        $user_id = Auth::id();
        $totalpriceall = 0;
        $current_date_time = Carbon::now()->toDateTimeString();
        for($i=0 ; $i<$drinks_len ; $i++) {
            $price = DB::table('drinks')->select('price')->where('id','=',$drinks_id[$i])->get();
            array_push($drinks_price,$price[0]->price);
            $totalprice = $price[0]->price*$drinks_quanitity[$i];
            array_push($drinks_totalprice,$totalprice);
            $totalpriceall+= $totalprice;
        }

        if($table_status ==1) {
            Order::insert([
                'totalPrices' => $totalpriceall,
                'idUser' => $user_id,
                'status' => 1,
                'idTable' => $table_id,
                'created_at' => $current_date_time,
                'updated_at' =>$current_date_time,

            ]);
            $order_ids= DB::table('orders')->select('id')->where('status','=',1)->where('idTable' ,'=', $table_id)->get();
            $order_id= $order_ids[0]->id ;
            //insert to order_items

            for($j=0 ; $j<$drinks_len; $j++){
                OrderItem::insert([
                'idDrink' => $drinks_id[$j],
                'idOrder' => $order_id,
                'quantity'=>$drinks_quanitity[$j],
                'totalPrice'=> $drinks_totalprice[$j],
                'plus' => $drinks_status[$j],
                ]);
            }
            //update table status ;
            Table::where('id' ,'=', $table_id)->update(['idStatus' => '2']);
        }
        else if($table_status==2){
            $order_ids= DB::table('orders')->select('*')->where('status','=',1)->where('idTable' ,'=', $table_id)->get();
            $order_id= $order_ids[0]->id ;
            //update total price in order
            $totalpriceall = $totalpriceall + $order_ids[0]->totalPrices;

            Order::where('id','=',$order_id)->update([
                'totalPrices' => $totalpriceall ,
                'updated_at' => $current_date_time,
            ]);

            //update order item
            for($j=0 ; $j<$drinks_len; $j++){
                OrderItem::insert([
                'idDrink' => $drinks_id[$j],
                'idOrder' => $order_id,
                'quantity'=>$drinks_quanitity[$j],
                'totalPrice'=> $drinks_totalprice[$j],
                'plus' => $drinks_status[$j],
                ]);
            }

        }
        else {
            $order_ids= DB::table('orders')->select('*')->where('status','=',1)->where('idTable' ,'=', $table_id)->get();

            $check_order = count($order_ids);
            if($check_order==0 ) {
                Order::insert([
                    'totalPrices' => $totalpriceall,
                    'idUser' => $user_id,
                    'status' => 1,
                    'idTable' => $table_id,
                    'created_at' => $current_date_time,
                    'updated_at' =>$current_date_time,

                ]);
                $order_ids= DB::table('orders')->select('id')->where('status','=',1)->where('idTable' ,'=', $table_id)->get();
                $order_id= $order_ids[0]->id ;
                //insert to order_items

                for($j=0 ; $j<$drinks_len; $j++){
                    OrderItem::insert([
                    'idDrink' => $drinks_id[$j],
                    'idOrder' => $order_id,
                    'quantity'=>$drinks_quanitity[$j],
                    'totalPrice'=> $drinks_totalprice[$j],
                    'plus' => $drinks_status[$j],
                    ]);
                }

            }
            else  {
                $order_id= $order_ids[0]->id ;

                $totalpriceall = $totalpriceall + $order_ids[0]->totalPrices;

                Order::where('id','=',$order_id)->update([
                    'totalPrices' => $totalpriceall ,
                    'updated_at' => $current_date_time,
                ]);

                //update order item
                for($j=0 ; $j<$drinks_len; $j++){
                    OrderItem::insert([
                    'idDrink' => $drinks_id[$j],
                    'idOrder' => $order_id,
                    'quantity'=>$drinks_quanitity[$j],
                    'totalPrice'=> $drinks_totalprice[$j],
                    'plus' => $drinks_status[$j],
                    ]);
                }
            }
        }

        return redirect('/home');

    }

    public function getbill($id_table) {

        $input = '';
        $order = Order::where('idTable',$id_table)->where('status','1')->get();



        if(count($order) == '0' ) {
            $input .= '<br><h2 style= "text-align:center;">you do not have bill</h2>';
        }
        else{
            $order_items = DB::table('order_items')->where('order_items.idOrder',$order[0]->id)->join('drinks','order_items.idDrink','=','drinks.id')->get();
            $input .= '<br><table class="table">
            <tr class="row header green">
                <td class="cell">
                    Drinks
                </td>
                <td class="cell">
                    Unit Price
                </td>
                <td class="cell">
                    Quantity
                </td>
                <td class="cell">
                    Date Sold
                </td>
                <td class="cell">
                    Status
                </td>
                <td class="cell">
                    total price
                </td>

            </tr>';
            foreach($order_items as $item) {
                $input .='
            <tr class="row">
                <td class="cell">
                    <h5>'. $item->name .'</h5>
                </td>
                <td class="cell">
                    <h5>'. $item->price  .' vnd </h5>
                </td>
                <td class="cell">
                    <h5>'. $item->quantity .'</h5>
                </td>
                <td class="cell">
                    <h5>'. $order[0]->created_at.'</h5>
                </td>
                <td class="cell">
                   <h5>'. $item->plus .'</h5>
                </td>
                <td class="cell">
                    <h5>'. $item->totalPrice .' vnd </h5>
                </td>
            </tr>

        ';
            }
          $input .='
            <br>
            <tr class="row">
                <td class="cell">
                    <h5> totalprices: </h5>
                </td>
                <td class="cell">
                    <h5>    </h5>
                </td>
                <td class="cell">
                    <h5>  </h5>
                </td>
                <td class="cell">
                    <h5>  </h5>
                </td>
                <td class="cell">
                   <h5>  </h5>
                </td>
                <td class="cell">
                    <h5> '. $order[0]->totalPrices .' vnd </h5>
                </td>
            </tr>

        ';
        $input .= '</table>'  ;
        }
        echo $input;
    }

    public function pay(Request $request ){
        $table_id = $request->Ntable;

        $table = Table::find($table_id);
        if($table->idStatus == 3 )
        {
            $this->changeStatus($table);
        }
        $table->idStatus = '1';
        $table->save();

        Order::where('idTable',$table_id) ->where('status', '1') -> update(['status'=> '2']);

        return redirect('/home');

    }
    public function changeStatus(&$tbl) {
        $strAddTbl = trim( $tbl->addTable) ;
        $arrTbl = explode(' ',$strAddTbl);
        $arrObjTbl = array();
        foreach($arrTbl as $item) {
            array_push($arrObjTbl, Table::find($item));
        }
        foreach($arrObjTbl as $item) {
            $item->idStatus =  1;
            $item->save();
        }
        $tbl->addTable = '' ;
        $tbl->save() ;
    }

    public function changeTable(Request $request) {
        $table_id = $request->Ntable ; // id table
        $table_id_to = $request->changetbl ;


        $table = Table::find($table_id);
        $table_to = Table::find($table_id_to);

        if($table->idStatus == 1) {

        }
        else {
            $order = Order::where('idTable',$table_id)->where('status','1')->get() ;
            $order_to =   Order::where('idTable',$table_id_to)->where('status','1')->get() ;
            if(count($order_to) == 0 ) {
                Order::where('idTable',$table_id)->where('status','1')->update(['idTable' => $table_id_to]) ;
                // $table->idStatus = 1;
                // $table->save();
                // $table_to->idStatus =2;
                // $table_to->save();
            }
            else {
                $idorder = $order[0]->id ;
                $idorder_to = $order_to[0]->id ;

                //update  bill in orderitem to orderitem_to
                OrderItem::where('idOrder',$idorder)->update(['idOrder'=>$idorder_to]);
                $new_total_price = $order[0]->totalPrices + $order_to[0]->totalPrices ;
                Order::where('idTable',$table_id_to)->where('status','1')->update(['totalPrices'=>$new_total_price]) ;
                Order::where('idTable',$table_id)->where('status','1')->delete();

                // $table->idStatus = 1;
                // $table_to->idStatus = 2;
                // $table_to->save();
                // $table->save();
            }
                if($table->idStatus == 3 ){
                    $this->changeStatus($table) ;
                }
                $table->idStatus = 1;
                $table_to->idStatus = 2;
                $table_to->save();
                $table->save();

        }

        return redirect('/home');

    }
}

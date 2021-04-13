<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class statistical extends Controller
{
    //
    public function day(Request $request) {
        if(isset($request->formday) && isset($request->today)){
            $form = date($request->formday);
            $to = date($request->today);
        }
        else {

            $form = date(Carbon::now()->addDays(-14)->toDateString());
            $to = date(Carbon::now()->toDateString());


        }
        // draw line chart  in Warehouse , Order , Orderitems join with drinks ;
        $warehouse = $this->drawWarehouses($form, $to );
        $orders = $this->drawOrders($form,$to);
        // $drinksPrice = $this->drawDrinks($form,$to);

        return view('statistical/statistical')
                ->with('totalprice',json_encode($warehouse))
                ->with('formday',$form)->with('today',$to)
                ->with('priceOrder',json_encode($orders))
                ;
     }
    //drawwarehouse
    public function drawWarehouses($form,$to) {
         $warehouse = DB::table('warehouses')
                    ->select(
                        DB::raw("day(created_at) as day"),
                        DB::raw("SUM(totalIn) as totalprice"))
                    ->whereBetween('created_at',[$form,$to])
                    ->groupBy(DB::raw("day(created_at)"))
                    ->get();
        $result[] = ['day','totalprice'];
        foreach ($warehouse as $key => $value) {
            $result[++$key] = [$value->day, (int)$value->totalprice];
        }
        return $result;
    }
    //drawOrder
    public function drawOrders($form,$to) {
        $orders = DB::table('orders')
            ->select(DB::raw("day(created_at) as day"),
                     DB::raw("sum(totalPrices) as totalPrices"))
            ->whereBetween('created_at',[$form,$to])
            ->groupBy(DB::raw("day(created_at)"))
            ->get();
        $result[] = ['day', 'totalprice'];
        foreach($orders as $key => $value){
            $result[++$key] = [$value->day , (int)$value->totalPrices];
        }
        return $result;
    }
    public function drawDrinks($form , $to ) {
        $drink = DB::table('orders')
            ->join('order_items','orders.id' ,'=', 'order_items.idOrder')
            ->select('order_items.idDrink', 'order_items.quantity')
            //->get();
            ;

        dd($drink);
        return $drink;
    }
}

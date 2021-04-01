<?php

namespace App\Http\Controllers;

use App\Table;
use App\Order;
use App\OrderItem;
use carbon\Carbon ;
use App\Http\Controllers\handling ;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    //

    public function addgroup(Request $request) {
        $Ntable = $request->Ntable;
        $arrTable = $request->gettable ;
        $objTables = array() ;
        foreach($arrTable as $item ) {
            array_push($objTables,Table::find($item));
        }
        $table = Table::find($Ntable) ;

        //get min table  in array
        $check = $this->minTable($arrTable, $Ntable);

        if($check == 1 ) {
            $this->atgroup($objTables , $table, $Ntable, $arrTable);

        }
        else if($check == 2 ) {
            $this->atgroup2($objTables, $table , $Ntable, $arrTable);
        }
        else {
            $this->atgroup3($objTables, $arrTable);
        }
        return redirect('/home');
    }
    //get min table in table ;
    public function minTable($arr , $tbl )  {
        if($arr[0] < $tbl) {
            return 1 ;
        }
        else if ( $arr[0]>$tbl ) {
            return 2 ;
        }
        else {
            return 3;
        }
    }
    public function atgroup(&$arr, &$tbl , $Ntable ,$changetbl) {

        $checkEqua = array_search($tbl->id , array_column($arr,'id'));

        if($checkEqua == null )  {
            array_push($arr, $tbl);//add $table to array

        }
        $this->agroup($arr); //add id table to addTable in  min table ;
        $this->createOrder($arr[0]) ;//create order  in min table ;
        array_push($changetbl,$Ntable);
        for($i =1 ; $i< count($changetbl) ; $i++ ){
            $this->changeTable($changetbl[$i], $changetbl[0]);
        }
        $this->changeStatus($arr);//change status for table in array ;
    }
    public function atgroup2(&$arr, &$tbl , $Ntable , $changetbl ) {
        $checkEqua = array_search($tbl->id, array_column($arr,'id'));
        if($checkEqua== null) {
            array_unshift($arr,$tbl) ;
        }
        $this->agroup($arr);
        $this->createOrder($arr[0]);
        array_unshift($changetbl,$Ntable) ;
        for($i = 1 ; $i< count($changetbl); $i++ ) {
            $this->changeTable($changetbl[$i], $changetbl[0]);
        }
        $this->changeStatus($arr);
    }
    public function atgroup3(&$arr, $changetbl) {
        $this->agroup($arr);
        $this->createOrder($arr[0]);
        for($i =1 ; $i <count($changetbl) ; $i++) {
            $this->changeTable($changetbl[$i], $changetbl[0]);
        }
        $this->changeStatus($arr);
    }
    public function createOrder(&$item){
        $haveOrder = Order::where('idTable',$item->id)->where('status','1')->get();
        if(count($haveOrder) == 0 ) {


        $user = Auth::id();
        $now_time = Carbon::now()->toDateTimeString();
        if($item->idStatus == 1) Order::insert([
            'totalPrices' => 0 ,
            'idUser' => $user,
            'idTable' => $item->id,
            'status' => '1',
            'created_at' => $now_time ,
        ]);
        $item->idStatus = 2; $item->save();
        }
    }
    public function agroup(&$arr) {
        $count = count($arr);
        for($i=1 ; $i<$count ; $i++ ){

            $arr[0]->addTable .= ' '. $arr[$i]->id ;



            if($arr[$i]->idStatus == 3) {
                if($arr[$i]->addTable !=''){
                    $arr[0]->addTable .=  $arr[$i]->addTable ;
                }

            }
        }
        $arr[0]->save();
    }
    public function changeTable( $Ntable, $changetbl) {

        $table_id = $Ntable ; // id table
        $table_id_to = $changetbl ;
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


            }
                if($table->idStatus == 3) {
                    $this->changeStatus3($table);
                }
                // $table->idStatus = 1;
                // $table_to->idStatus = 2;
                // $table_to->save();
                // $table->save();

        }

    }
    public function changeStatus3(&$tbl) {
        $strAddTbl = trim( $tbl->addTable) ;
        $arrTbl = explode(' ',$strAddTbl);
        $arrObjTbl = array();
        foreach($arrTbl as $item) {
            array_push($arrObjTbl, Table::find($item));
        }
        foreach($arrObjTbl as $item) {
            $item->idStatus =  3;
            $item->save();
        }
        $tbl->addTable = '' ;
        $tbl->save() ;
    }
    public function changeStatus(&$arr) {
        foreach($arr as $item) {
            $item->idStatus  =  3;
            $item->save();
        }
    }
}


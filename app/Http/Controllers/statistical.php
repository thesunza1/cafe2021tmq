<?php

namespace App\Http\Controllers;

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

            $form = date(Carbon::now()->toDateString());
            $to = date(Carbon::now()->addDays(1)->toDateString());


        }
        //draw line chart  in Warehouse , Order , Orderitems join with drinks ;
        $warehouse = $this->drawWarehouses($form, $to );
        $orders = $this->drawOrders($form,$to);

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
}

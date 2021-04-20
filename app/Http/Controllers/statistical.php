<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PHPUnit\Util\Json;

class statistical extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function day(Request $request) {
        if(isset($request->formday) && isset($request->today)){
            $form = date($request->formday);
            $to = date($request->today);
        }
        else {

            $form = date(Carbon::now()->addDays(-14)->toDateString());
            $to = date(Carbon::now()->addDays(1)->toDateString());


        }
        //draw line chart  in Warehouse , Order , Orderitems join with drinks ;
        $warehouse = $this->drawWarehouses($form, $to );
        $orders = $this->drawOrders($form,$to);
        $drinksPrice = $this->drawDrinks($form,$to);

        return view('statistical/statistical')
                ->with('totalprice',json_encode($warehouse))
                ->with('formday',$form)->with('today',$to)
                ->with('priceOrder',json_encode($orders))
                ->with('drinkQuantity',json_encode($drinksPrice))
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
        if(count($result) <=3){
            array_push($result,['day'=>'1' , 'totalprice' => 0]);
            array_push($result,['day'=>'2' , 'totalprice' => 0]);
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
        $drink = DB::table('order_items')
            ->join('orders','orders.id','=','order_items.idOrder')
            ->join('drinks','drinks.id','=','order_items.idDrink')
            -> select('drinks.name',DB::raw('sum(quantity) as totalprice'))
            ->whereBetween('orders.created_at',[$form,$to])
            ->groupBy('idDrink','drinks.name')
            ->get();

        //dd($drink);
        $result[] = ['name of drink' , 'quantity'];
        foreach($drink as $key => $value){
            $result[++$key] = [$value->name, (int)$value->totalprice];
        }
        //dd($result);
        if(count($result) <=3){
            array_push($result,['name'=>'none1' , 'totalprice' => 2]);
            array_push($result,['name'=>'none1' , 'totalprice' => 1]);
        }
        return $result;

    }
}

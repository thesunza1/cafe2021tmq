<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class WarehouseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $warehouses = Warehouse::all()->reverse()->values() ;
        return view('warehouse.index')->with('warehouses', $warehouses);
    }


    public function get_show($id) {
        $element = Warehouse::find($id);
        echo $element;
    }

    public function post_update(Request $request) {
        $idWh = $request->id;
        $toNameWh = $request->name;
        $priceWh = $request->price ;
        $inquantity =  $request->inquantity;
        $totalIn = $priceWh * $inquantity;
        Warehouse::where('id',$idWh)->update([
            'toName' => $toNameWh,
            'price' => $priceWh,
            'totalIn' => $totalIn,
            'inquantity'=>$inquantity,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('home/warehouse');
    }
    public function store(Request $request) {
        $toNameWh = $request->name;
        $priceWh = $request->price ;
        $inquantity =  $request->inquantity;
        $totalIn = $priceWh * $inquantity;
        Warehouse::insert([
            'toName' => $toNameWh,
            'price' => $priceWh,
            'totalIn' => $totalIn,
            'inquantity'=>$inquantity,
            'updated_at' => Carbon::now()->toDateTimeString(),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect('home/warehouse');

    }

    public function delete(Request $request) {
        Warehouse::where('id',$request->id)->delete();
        return redirect('/home/warehouse');
    }
}

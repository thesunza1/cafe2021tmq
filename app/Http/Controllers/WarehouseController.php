<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    //
    public function index() {
        $warehouses = Warehouse::all()->reverse()->values() ;
        return view('warehouse.index')->with('warehouses', $warehouses);
    }

    public function show($id) {

    }
    public function get_show($id) {
        $element = Warehouse::find($id);
        //$element->created_at = date_format($element,'Y-m-d H:i:s');
        // $datetime = new DateTime("$element->created_at");
        // $in =strval(date_format($datetime,'Y-m-d H:i:s'));
        // //dd($in);
        // $element->created_at = $in ;
        //echo $element->created_at;

        echo $element;

    }

    public function post_update(Request $request) {
        $input = $request->all();
        dd($input);
    }
    public function store(Request $request) {

    }

}

<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    //
    public function index() {
        $warehouses = Warehouse::all()->reverse()->values() ;
        return view('warehouse.index')->with('warehouses', $warehouses);
    }
    public function show() {

    }
    public function store(Request $request) {

    }

}

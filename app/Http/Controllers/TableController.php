<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function addgroup(Request $request) {
        $alltable  =  $request->all() ;
        dd($alltable);
    }
}

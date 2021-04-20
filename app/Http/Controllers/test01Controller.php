<?php

namespace App\Http\Controllers;

use App\Status;
use App\Table;
use Illuminate\Http\Request;

class test01Controller extends Controller
{
    //
    public function index() {
        return view('test01') ;
    }
    public function status(Request $request) {

        dd($request->user()->role_id);

        //return view('test01',compact('Statuses'));

    }
}

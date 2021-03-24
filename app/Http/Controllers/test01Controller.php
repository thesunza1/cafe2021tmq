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
    public function status() {

        //$Statuses = Status::all() ;
        //print_r($Statuses[1]->image);
        $Statuses = Table::find(1)->status->toArray();

        dd($Statuses);








        //return view('test01',compact('Statuses'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Drink;
use App\Table;
use App\Status;
use App\Order;
use App\OrderItem;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tables= DB::table('tables')
            ->join('statuses','tables.idStatus','=','statuses.id')
            ->select('tables.*','statuses.image','statuses.status')
            ->orderBy('tables.id')
            ->get()
            ;

        $drinks= Drink::all();

        return view('home')->with('tables',$tables)->with('drinks',$drinks);
    }
}

<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DrinkController extends Controller
{
    //show menu
    public function index() {
        $drinks = Drink::get();
        return view('drink.index')->with('drinks',$drinks);
    }

    //show form create drinks
    public function create() {
        return view('drink.create');
    }

    //dua drink vao database ;
    public function store(Request $request)  {
        //lay names cua do uong
        $names =  $request->names ;
        //lay prices cua do uong
        $price = $request->price;
        //lay status cua do uong
        $status = $request->status;
        //in ra xem thu noi dung ;
        //tao ten file theo thoi gian
        $filename =time().'.'. $request->imgs->extension();
        $pathfile = 'img/drinks/';
        //di chuyen toi thu muc img/drinks
        $request->imgs->move(public_path("$pathfile"),$filename);
        //them vao database
        Drink::insert([
            'name' => $names,
            'price' => $price,
            'status'=> $status,
            'image' => $pathfile.$filename,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return view('drink.create');

    }

    //post ajax xem drinks
    public function show($drink_id) {

        $input = '';


        $drinks=  Drink::where('id',$drink_id)->get();

        foreach($drinks as $drink) {
            $input .= '<div class="modal-content">
            <div class="magirn">
            <br>
            <h1 id="name">'. $drink->name .'</h1>
            <br>
            <img src="'. $drink->image .'" alt="">
            <br>
            <br>
            <p>price : </p>
            <p>'. $drink->price .'</p>
            <br>
            <p>gioi thieu: </p>
            <p>'.  $drink->status .'
            </p>

            </div>

       </div>';
       echo $input;
        }







    }
}

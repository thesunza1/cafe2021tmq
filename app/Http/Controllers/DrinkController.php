<?php

namespace App\Http\Controllers;

use App\Drink;
use App\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;

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

        return redirect('/home/menulist');

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

    //menu list
    public function indexMl() {
        $menulist = Drink::all()->reverse()->values() ;
        return view('menulist.index')->with('menulist', $menulist);

    }

    public function get_showMl($id) {
        $element = Drink::find($id);
        echo $element;
    }
    public function storeMl(Request $request) {
        $toNameMl = $request->name;
        $priceMl = $request->price ;
        $image=  $request->images;
        $status=  $request->status;
        Drink::insert([
            'name' => $toNameMl,
            'price' => $priceMl,
            'image' => $image,
            'status'=>$status,
            'updated_at' => Carbon::now()->toDateTimeString(),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect('home/menulist');

    }
    public function post_update(Request $request) {
        $idMl = $request->id;
        $toNameMl = $request->name;
        $priceMl = $request->price ;
        $image=  $request->images;
        $status=  $request->status;
        Drink::where('id',$idMl)->update([
            'toName' => $toNameMl,
            'price' => $priceMl,
            'totalIn' => $image,
            'inquantity'=>$status,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect('home/menulist');

    }
    public function delete(Request $request) {

        dd($request->all());
    }

}

<?php

namespace App\Http\Controllers;

use App\Drink;
use App\OrderItem;
use App\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;

use function Psy\debug;

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

        $names =  $request->names ;

        $price = $request->price;

        $status = $request->status;

        $filename =time().'.'. $request->imgs->extension();
        $pathfile = 'img/drinks/';

        $request->imgs->move(public_path("$pathfile"),$filename);

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

        $id = $request->id ;
        $names =  $request->names ;
        $price = $request->price;
        $status = $request->status;
        if($request->imgs1 == null) {
         Drink::where('id',$id)->update([
            'name' => $names,
            'price' => $price,
            'status'=> $status,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        }
        else {
        $filename =time().'.'. $request->imgs1->extension();
        $pathfile = 'img/drinks/';
        $request->imgs1->move(public_path("$pathfile"),$filename);
        //them vao database
        Drink::where('id',$id)->update([
            'name' => $names,
            'price' => $price,
            'status'=> $status,
            'image' => $pathfile.$filename,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
            }

        return redirect('/home/menulist');

    }
    public function delete(Request $request) {
        OrderItem::where('idDrink',$request->id)->delete();
        Drink::where('id',$request->id)->delete();

        return redirect('/home/menulist');
    }

}

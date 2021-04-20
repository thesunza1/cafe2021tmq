<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $users=  User::all()->reverse()->values();
      return view('updateuser.index')->with('users',$users);
    }
    public function store(Request $request) {
        $id = $request->id ;
        $username= $request->username;
        $pass = $request->pass;
        $name = $request->name;
        $phone = $request->phone;
        $count = count(User::where('username',$request->username)->get());
        if($count <2 ) {
            User::create([
                'username'=> $username,
                'password'=> Hash::make($pass),
                'name' =>$name,
                'phone'=>$phone,
                'role_id'=>1,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
            $mess ='success!';
        }
        else {

            $mess ='error! username is had';
        }

        return redirect('/home/updateuser');

    }
    public function delete(Request $request) {
        $id = $request->id ;
        Order::where('idUser',$id)->update(['idUser'=>'']);
        User::find($id)->delete();

        return redirect('/home/updateuser');
;
    }

    public function update(Request $request) {
        $id = $request->id ;
        $username= $request->username;
        $pass = $request->pass;
        $name = $request->name;
        $phone = $request->phone;
        $count = count(User::where('username',$request->username)->get());
        if($count <2 ) {
            User::where('id',$id)->update([
                'username'=> $username,
                'password'=> Hash::make($pass),
                'name' =>$name,
                'phone'=>$phone,
            ]);
            $mess ='success!';
        }
        else {

            $mess ='error! username is had';
        }
       $users=  User::all()->reverse()->values();
        return redirect('/home/updateuser');
    }
    public function show($id) {
        echo User::find($id);

    }
}

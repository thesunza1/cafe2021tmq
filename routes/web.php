<?php

use App\Http\Controllers\test01Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});
//tat mot so chuc nang cua auth
Auth::routes([
    'register' => false,
    'verify' =>false ,
    'reset' =>false ,
    'request' =>false,
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//vi du



//them drink
Route::get('/menu/index','DrinkController@index')->name('menu.index');
Route::get('/menu/create','DrinkController@create')->name('menu.create') ;
Route::post('/menu/store', 'DrinkController@store')->name('menu.store');

//create order bild
Route::post('order/store','OrderController@store') ->name('order.store');

// show menu
Route::get('/menu','DrinkController@index')->name('menu');
Route::get('/menu/getdrink/{drink_id}','DrinkController@show')->name('menu.getdrink');

//get bill  ajax
Route::get('/home/getbill/{id_table}','OrderController@getbill')->name('home.getbill');

//send bill
Route::post('/home/sendbill','OrderController@pay')->name('home.sendbill');

//change table .
Route::post('/home/changetable', 'OrderController@changeTable')->name('home.changeTable');
//add to group
Route::post('/home/addgroup','TableController@addgroup')->name('home.addgroup');
//warehoure
Route::middleware(['checkAdmin'])->group(
    function () {
        Route::get('/home/warehouse','WarehouseController@index')->name('home.warehouse');
        Route::post('/home/warehouse/store','WarehouseController@store')->name('home.warehouse.store');
        Route::get('/home/warehouse/getshow/{id}','WarehouseController@get_show')->name('home.warehouse.get_show');
        Route::post('home/warehouse/postupdate','WarehouseController@post_update')->name('home.warehouse.post_update');
        Route::post('/home/warehouse/delete','WarehouseController@delete')->name('home.warehouse.delete');
        //chart google
        Route::match(['get','post'],'/home/statistical','statistical@day')->name('home.statistical');
        //drinks
        Route::get('/home/menulist','DrinkController@indexMl')->name('home.menulist');
        Route::post('/home/menulist/store','DrinkController@storeMl')->name('home.menulist.store');
        Route::get('/home/menulist/getshow/{id}','DrinkController@get_showMl')->name('home.menulist.get_show');
        Route::post('home/menulist/postupdate','DrinkController@post_update')->name('home.menulist.post_update');
        Route::post('/home/menulist/delete','DrinkController@delete')->name('home.menulist.delete');
        //update table route
        Route::get('/home/updatetable','TableController@indexUpdateTable')->name('home.updatetable');
        Route::post('/home/updatetable/delete','TableController@delete')->name('home.updatetable.delete');
        Route::post('/home/updatetable/store','TableController@store')->name('home.updatetable.store');
        Route::post('/home/updatetable/restore','TableController@restore')->name('home.updatetable.restore');
        //user table route e
        Route::get('/home/updateuser','Controller@index')->name('home.updateuser');
        Route::post('/home/updateuser/store','Controller@store')->name('home.updateuser.store');
        Route::get('/home/updateuser/getshow/{id}','Controller@show')->name('home.updateuser.show');
        Route::post('home/updateuser/postupdate','Controller@update')->name('home.updateuser.update');
        Route::post('/home/updateuser/delete','Controller@delete')->name('home.updateuser.delete');
    }
);


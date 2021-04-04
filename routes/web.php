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
Route::get('/test01', 'test01Controller@index')->name('/test01') ;
Route::get('/status','test01Controller@status');

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
Route::get('/home/warehouse','WarehouseController@index')->name('home.warehouse');
Route::get('/home/warehouse/create','WarehouseController@show')->name('home.warehouse.create');
Route::post('/home/warehouse/store','WarehouseController@store')->name('home.warehouse.store');




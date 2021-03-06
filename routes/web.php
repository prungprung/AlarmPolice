<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/defaultview', function () {
    return view('defaultview/defaultview');
});
Route::get('/sendriff', function(){
    return view('getdataview/getdataview');
});
Route::get('/findCar', function(){
    return view('findCar');
});
Route::get('/car', function(){
    return view('car');
});
Route::get('/carblacklist', function(){
    return view('findCarBlackList');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/loginout', function(){
    return view('loginout');
});
Route::get('/sendtext','TextMessageLineController@TextMessageLine');
Route::get('/sendflex','FlexLineController@Flex');
Route::get('/sendnotify','NotifyController@Notify');
Route::get('/listData','RichMenuController@RichMenu');
Route::get('/sendText','SendTextController@SendText');


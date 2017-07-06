<?php

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
/*Route::get('a', function () {
 $arr = [1,2,3];
    dd($arr);
});*/
/*Route::get('cal-{num1}-{num2}', function ($sum1,$sum2) {
    return $sum1+$sum2;
});*/
Route::get('users', 'UserController@index');
Route::get('/', 'HomeController@index');
Route::get('users-{sum1}-{sum2}', 'HomeController@cal');
Route::get('users/show/{id}','UserController@show');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Auth::routes();

//Route::get('/home', 'HomeController@home');

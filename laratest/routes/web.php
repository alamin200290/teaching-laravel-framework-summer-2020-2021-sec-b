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

Route::get('/login', ['uses'=>'LoginController@index']);
Route::post('/login', 'LoginController@verify');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'LogoutController@index');
Route::get('/user/list', 'UserController@index');
Route::get('/user/details/{id}', 'UserController@details');


Route::get('/register', function(){
	echo "this is signup page...";
});
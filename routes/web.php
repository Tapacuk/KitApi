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

Route::get('/guz', 'GuzController@index');
Route::get('services', function(){
		$b = KitApi::get_services();
		//dd($b);
		$a = array($b->ZA, $b->NM);
		return $a;
});
Route::get('services', 'CitiController@services');
Route::get('cities', 'CitiController@cities');
Route::get('is_city/{city}', 'CitiController@is_city');
Route::get('price', 'CitiController@price_order');
Route::get('pr', function(){
		return view('pri'); //form for calc
});



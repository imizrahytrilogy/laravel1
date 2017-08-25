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



Route::get('options/{option}', function ($var) {

	$res = DB::table('options')->find($var);
	
	dd($res);
	//returns JSON with row    
    return view('options')->with(compact('res'));
});


Route::get('/admin', function () {

	$var1 = 'cool_var';

	$sql_query = DB::table('options')->get();

	return view('admin')->with(compact('var1','sql_query'));
});



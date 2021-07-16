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

//url /public/
Route::get('/', function () {
    return view('welcome');
});

Route::view('/menu', 'menu');

Route::get('/menu/{macam}',function($macam){
    return view('macam',['name'=>$macam]);
});
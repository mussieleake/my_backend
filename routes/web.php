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
Route::any('/login', function (){
    return response(content:"<h1>hi</h1>", status: 200);
});

Route::any('/login/{userId}', function($userId){
    return $userId;
})->where('userId', '[0-9]+');
Route::GET('/about', function(){
    return view('about');
});
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

Route::get('/hello-world', function () {
    return view('hello_world');
});
Route::get('/about_us', function () {
    return view('about_us', ['name' => 'Laravel 6.0 範例']);
});

Route::get('/inspire', 'InspiringController@inspire');

Route::get('/todo', 'TodoController@index');
Route::post('/todo', 'TodoController@update');
Route::get('/testRedis','RedisController@testRedis')->name('testRedis');
Route::get('/item/{id}', 'ItemController@showItem');

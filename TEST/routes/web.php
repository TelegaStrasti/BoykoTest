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
    return view('index');
});

Route::get('/', 'App\Http\Controllers\NewsController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\NewsController@create')->name('create');
Route::post('/', 'App\Http\Controllers\NewsController@store')->name('store');
Route::get('/show/{news}', 'App\Http\Controllers\NewsController@show')->name('show');
Route::get('/show/{news}/edit', 'App\Http\Controllers\NewsController@edit')->name('edit');
Route::patch('/{news}', 'App\Http\Controllers\NewsController@update')->name('update');
Route::delete('/{news}', 'App\Http\Controllers\NewsController@delete')->name('delete');

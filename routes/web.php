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

Route::get('/postad', function () {
    return view('postad');
})->name('post');

Route::get('/browseads', 'App\Http\Controllers\AdController@index')->name('browse');

Route::post('/postad', 'App\Http\Controllers\AdController@store');

Route::post('/browseads', 'App\Http\Controllers\AdController@search');
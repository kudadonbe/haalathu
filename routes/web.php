<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/haalathu', 'PublicController@haalathu')->name('haalathu');
Route::get('/haalathu/home', 'haalathuController@index')->name('haalathu.home.index');
Route::get('/bayaan', 'PublicController@bayaan')->name('iquraaru');

Route::get('/haalathu/house/create', 'HouseController@create')->name('haalathu.house.create');
Route::get('/haalathu/house/{name}', 'HouseController@show')->name('house.show');
Route::get('/haalathu/shop/{name}', 'ShopController@show')->name('shop.show');

Route::post('/haalathu/house', 'HouseController@store')->name('haalathu.house.store');



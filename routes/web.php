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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/haalathu', 'PublicController@haalathu')->name('haalathu');
Route::get('/haalathu/home', 'haalathuController@index')->name('haalathu.home');
Route::get('/bayaan', 'PublicController@bayaan')->name('iquraaru');
Route::get('/haalathu/register', 'PublicController@newuser')->name('haalathuRegs');
Route::get('/haalathu/reports/{house}', 'haalathuController@report')->name('haalathu.reports');
Route::get('/haalathu/house/{name}', 'HouseController@index')->name('');
Route::get('/haalathu/shop/{name}', 'ShopController@index')->name('');




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
Route::get('/haalathu/home', 'PublicController@index')->name('haalathu.home');
Route::get('/haalathu/{report}', 'PublicController@report')->name('haalathu.hreport');
Route::get('/bayaan', 'PublicController@bayaan')->name('ބަޔަަނ');
Route::get('/haalathu/register', 'PublicController@newuser')->name('haalathuRegs');




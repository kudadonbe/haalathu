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


Route::get('/haalathu/person/create', 'PersonController@create')->name('haalathu.person.create');
Route::get('/haalathu/house/create', 'HouseController@create')->name('haalathu.house.create');
Route::get('/haalathu/shop/create', 'ShopController@create')->name('haalathu.shop.create');
Route::get('/haalathu/commodity/create', 'CommodityController@create')->name('haalathu.commodity.create');

Route::get('/haalathu/people', 'PersonController@index')->name('person.index');
Route::get('/haalathu/houses', 'HouseController@index')->name('house.index');
Route::get('/haalathu/shops', 'ShopController@index')->name('shop.index');
Route::get('/haalathu/commodities', 'CommodityController@index')->name('Commodity.index');
Route::get('/haalathu/{house_id}/residents', 'ResidentController@index')->name('house.index');

Route::get('/haalathu/person/{nid}', 'PersonController@show')->name('person.show');
Route::get('/haalathu/house/{name}', 'HouseController@show')->name('house.show');
Route::get('/haalathu/shop/{name}', 'ShopController@show')->name('shop.show');
Route::get('/haalathu/commodity/{name}', 'CommodityController@show')->name('commodity.show');

Route::get('/haalathu/person/{nid}/edit', 'PersonController@edit')->name('person.edit');
Route::get('/haalathu/commodity/{name}/edit', 'CommodityController@edit')->name('commodity.edit');


Route::post('/haalathu/house/resident', 'ResidentController@store')->name('haalathu.house.resident.store');
Route::post('/haalathu/person', 'PersonController@store')->name('haalathu.person.store');
Route::post('/haalathu/house', 'HouseController@store')->name('haalathu.house.store');
Route::post('/haalathu/commodity', 'CommodityController@store')->name('haalathu.commodity.store');
Route::post('/haalathu/shop', 'ShopController@store')->name('haalathu.shop.store');

Route::patch('/haalathu/person/{nid}', 'PersonController@update')->name('haalathu.person.update');
Route::patch('/haalathu/commodity/{name}', 'CommodityController@update')->name('commodity.update');

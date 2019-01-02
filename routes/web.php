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

/*各分頁*/
Route::get('/', ['as' => 'hotel.index',   'uses' => 'HotelController@index']);
Route::get('rooms',  ['as' => 'hotel.rooms',    'uses' => 'HotelController@rooms']);
Route::get('about',    ['as' => 'hotel.about',   'uses' => 'HotelController@about']);
Route::get('trip',  ['as' => 'hotel.trip', 'uses' => 'HotelController@trip']);
Route::get('booking',  ['as' => 'hotel.booking',  'uses' => 'HotelController@booking']);
Route::get('review',  ['as' => 'hotel.review',  'uses' => 'HotelController@review']);


/*登入，auth驗證等等......*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

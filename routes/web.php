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


/*後台*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('booking', ['as' => 'admin.booking.index', 'uses' => 'AdminController@index']);
    Route::get('booking/{id}/edit', ['as' => 'admin.booking.edit', 'uses' => 'AdminController@edit']);
    Route::post('booking', ['as' => 'admin.booking.store', 'uses' => 'AdminController@store']);
    Route::patch('booking/{id}', ['as' => 'admin.booking.update', 'uses' => 'AdminController@update']);
    Route::delete('booking/{id}', ['as' => 'admin.booking.destroy', 'uses' => 'AdminController@destroy']);
});

/*貼文*/
Route::get('post1',  ['as'=>'posts.post1','uses' => 'PostController@post1']);
Route::get('post2',  ['as'=>'posts.post2','uses' => 'PostController@post2']);

/*各房間*/
Route::get('rooms/{id}',  ['as' => 'rooms.id',    'uses' => 'RoomController@detail']);
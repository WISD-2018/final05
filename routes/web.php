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

/*訂房*/
Route::group(['prefix' => 'booking'], function() {
    Route::get('time', ['as' => 'booking.time', 'uses' => 'BookingController@time']);
    Route::get('room', ['as' => 'booking.room', 'uses' => 'BookingController@room']);
    Route::get('check', ['as' => 'booking.check', 'uses' => 'BookingController@check']);
    Route::post('final', ['as' => 'booking.final', 'uses' => 'BookingController@final']);
});
/*後台*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@home']);
    Route::get('booking', ['as' => 'admin.booking.index', 'uses' => 'AdminController@index']);
    Route::get('booking/{id}/edit', ['as' => 'admin.booking.edit', 'uses' => 'AdminController@edit']);
    Route::post('booking', ['as' => 'admin.booking.store', 'uses' => 'AdminController@store']);
    Route::patch('booking/{id}', ['as' => 'admin.booking.update', 'uses' => 'AdminController@update']);
    Route::delete('booking/{id}', ['as' => 'admin.booking.destroy', 'uses' => 'AdminController@destroy']);
});

/*貼文*/
Route::get('post1',  ['as'=>'posts.post1','uses' => 'PostController@post1']);
Route::get('post2',  ['as'=>'posts.post2','uses' => 'PostController@post2']);
Route::get('post3',  ['as'=>'posts.post2','uses' => 'PostController@post3']);
Route::get('post4',  ['as'=>'posts.post2','uses' => 'PostController@post4']);

/*房間*/
Route::get('rooms/{id}',  ['as' => 'rooms.id',    'uses' => 'RoomController@detail']);

/*各行程*/
Route::get('trip/{id}',  ['as' => 'trip.id',    'uses' => 'TripController@detail']);
Route::get('map/{id}',  ['as' => 'map.id',    'uses' => 'MapController@detail']);
Route::get('trip/view/{id}',  ['as' => 'view.id',    'uses' => 'TripdetailController@detail']);
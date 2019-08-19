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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']], function(){
    Route::get('client/','ClienController@index')->name('clientIndex');
    Route::get('client/create','ClienController@create')->name('createClient');
    Route::post('client/store','ClienController@store')->name('storeClient');

    Route::get('charge/','ChargeController@index')->name('chargeIndex');
    Route::get('charge/create','ChargeController@create')->name('createCharge');
    Route::post('charge/store','ChargeController@store')->name('storeCharge');

    Route::get('charge/lines/{id}','LineController@brandLine');
    Route::get('charge/searchClient/{id}','HomeController@searchClient');

});

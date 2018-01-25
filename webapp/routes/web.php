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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/permits', 'PermitController@index')->name('permits');

Route::get('/permits/all', 'PermitController@getAll')->name('allPermits');

Auth::routes();



Route::group(
[
    'prefix' => 'permits',
], function () {


    Route::get('/all', 'PermitsController@getAll')
    ->name('permits.permit.all');

    Route::get('/', 'PermitsController@index')
         ->name('permits.permit.index');

    Route::get('/create','PermitsController@create')
         ->name('permits.permit.create');

    Route::get('/show/{permit}','PermitsController@show')
         ->name('permits.permit.show')
         ->where('id', '[0-9]+');

    Route::get('/{permit}/edit','PermitsController@edit')
         ->name('permits.permit.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PermitsController@store')
         ->name('permits.permit.store');
               
    Route::put('permit/{permit}', 'PermitsController@update')
         ->name('permits.permit.update')
         ->where('id', '[0-9]+');

    Route::delete('/permit/{permit}','PermitsController@destroy')
         ->name('permits.permit.destroy')
         ->where('id', '[0-9]+');

});

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('API')->name('api.')->group( function() {
    Route::prefix('/clients')->group( function() {

     Route::get('/', 'ClientController@index')
     ->name('clients.index');

     Route::get('/{id}', 'ClientController@show')
     ->name('clients.client');

     Route::post('/', 'ClientController@store')
     ->name('clients.store');

     Route::put('/{id}', 'ClientController@update')
     ->name('clients.update');

     Route::delete('/{id}', 'ClientController@destroy')
     ->name('clients.destroy');
    });
});
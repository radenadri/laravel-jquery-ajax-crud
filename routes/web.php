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
    return redirect('/api/states');
});

Route::group(['prefix' => 'api'], function() {
    Route::get('/states', 'StatesController@index');
    Route::post('/states/store', 'StatesController@store');
    Route::put('/states/update', 'StatesController@update');
    Route::delete('/states/delete', 'StatesController@destroy');
});

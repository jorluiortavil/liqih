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

Route::prefix('suministros')->group(function() {
    Route::get('/', 'SuministrosController@index');
    Route::resource('reception', ReceptionsController::class);
});

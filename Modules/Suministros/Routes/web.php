<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::group(["middleware" => "role"], function () {
Route::prefix('suministros')->group(function() {
    Route::get('/', 'SuministrosController@index');
    Route::resource('reception', ReceptionsController::class);
    Route::resource('store', ArticlesController::class);
    Route::resource('supply', SuppliesController::class);
    Route::resource('dispatch', DispatchController::class);
    Route::get('details', 'ArticlesController@details')->name('details');
});
});
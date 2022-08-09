<?php
use App\Http\Controllers\Data2Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('user', [App\Http\Controllers\Data2Controller::class, 'index']);
Route::get('indexShopping', [App\Http\Controllers\Data2Controller::class, 'indexShopping']);
Route::get('getShoppingById/{id}', [App\Http\Controllers\Data2Controller::class, 'getShoppingById']);
Route::post('create', [App\Http\Controllers\Data2Controller::class, 'create']);
Route::post('updateShopping/{id}', [App\Http\Controllers\Data2Controller::class, 'updateShopping']);
Route::get('deleteShopping/{id}', [App\Http\Controllers\Data2Controller::class, 'deleteShopping']);

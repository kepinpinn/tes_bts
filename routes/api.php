<?php
use App\Http\Controllers\api\DataController;
use DataController as GlobalDataController;
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



Route::get('user', [App\Http\Controllers\api\DataController::class, 'indexShopping']);
Route::get('getShopping', [App\Http\Controllers\api\DataController::class, 'indexShopping']);
Route::get('getShoppingById/{id}', [App\Http\Controllers\api\DataController::class, 'getShoppingById']);
Route::post('saveShopping', [App\Http\Controllers\api\DataController::class, 'saveShopping']);
Route::post('updateShopping/{id}', [App\Http\Controllers\api\DataController::class, 'updateShopping']);
Route::get('deleteShopping/{id}', [App\Http\Controllers\api\DataController::class, 'deleteShopping']);

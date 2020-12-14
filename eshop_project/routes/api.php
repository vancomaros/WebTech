<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products/list/{page}', 'API\ItemController@list');
Route::delete('products/{product}', 'API\ItemController@destroy');
Route::post('products/', 'API\ItemController@store');
Route::get('products/{product}/show', 'API\ItemController@show');
Route::put('products/{product}', 'API\ItemController@update');

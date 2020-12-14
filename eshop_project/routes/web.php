<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/product', function () {
//     return view('contents.product');
// });

//Route::get('/login', 'LoginController@create');
//Route::post('/login', 'LoginController@store');
//Route::get('/login', 'LoginController@show');
//Route::get('/registration', 'RegistrationController@show');
//Route::post('/registration', 'RegistrationController@store');
// Route::get('/checkout', 'CheckoutController@show');
// Route::get('/checkout2', 'Checkout2Controller@show');
Route::get('/list', 'ProductListController@index');
Route::get('/list/search', 'ProductListController@search');
Route::get('/list/{id}', 'ProductListController@category');
Route::get('/cart', 'CartController@show');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product', 'ProductController@index');


Route::get('cart', 'ProductController@cart');
Route::post('add-to-cart/{id}', 'ProductController@addToCart');
Route::patch('update-cart', 'ProductController@update');
Route::delete('/remove-from-cart', 'ProductController@remove');
Route::get('checkout', 'ProductController@checkout');
// Route::get('checkoutnext', 'ProductController@checkoutnext');
Route::get('paymentshipping', 'ProductController@paymentshipping');
Route::post('credentials', 'ProductController@credentials');
Route::resource('/', 'ItemController');
// Route::resource('credentials', 'ProductController');
// Route::get('/product',  'App\Http\Controllers\ItemController')

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


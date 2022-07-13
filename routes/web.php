<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/boutique''ProductController@index');
/*Route des products */

Route::get('/boutique','ProductController@index')->name('products.index');
Route::get('/boutique/{slug}','ProductController@show')->name('products.show');

/*Route des carts */

Route::get('/panier','CartController@index')->name('cart.index');
Route::post('/panier/ajouter/{slug}','CartController@store')->name('cart.store');
Route::patch('panier/{rowId}', 'CartController@update')->name('cart.update');
Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');


/*Route des payment */
Route::get('/payment','CheckoutController@index')->name('checkout.index');
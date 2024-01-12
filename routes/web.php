<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::resources([
    "cookers"=>"productsController",
    "fridge"=>"productsController",
    "products"=>"productsController",
    "editcookers"=>"productsController",
    "editfridge"=>"productsController",
    "addItem"=>"productsController",
    '/products/search'=>"productsController"
]);


Route::get("cart",'ProductsController@showCart');


Route::get("category",function(){
    return view('CPanel.Categories');
});

// seach route
Route::get("/produt_search",[ProductsController::class,'product_search']);

// cart function route
Route::get('add-to-cart/{id}','productsController@addToCart');
Route::get('clear-cart', [productsController::class, 'clearCart'])->name('clearCart');
Route::get('/remove-item-from-cart', [productsController::class, 'removeItemFromCart'])
->name('removeItemFromCart');   

// web.php
Route::post('submit-order', 'productsController@submitOrder')->name('submitOrder');
Route::view('confirmation', 'confirmation')->name('confirmation');

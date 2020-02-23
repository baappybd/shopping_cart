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

Route::get('/', 'ProductController@all_product');
Route::get('product', 'ProductController@index');
Route::post('product_store', 'ProductController@store');
Route::get('product_edit/{id}', 'ProductController@product_edit');
Route::patch('update_product/{id}', 'ProductController@update_product');
Route::delete('product_delete/{id}', 'ProductController@product_delete');
Route::post('add-cart', 'ProductController@add_cart');
Route::get('show-cart', 'ProductController@show_cart');
Route::get('cart/delete/{id}',[
    'uses'=> 'ProductController@delete_cart',
    'as'=>'cart-item-delete'
]);
Route::get('checkout',[
    'uses'=> 'CheckoutController@index',
    'as'=>'checkout'
]);
Route::post('add-user',[
    'uses'=> 'CheckoutController@store',
    'as'=>'add-user'
]);
Route::get('shipping',[
    'uses'=> 'CheckoutController@shipping',
    'as'=>'shipping'
]);
Route::post('shipping_address/{id}','ShippingController@store');

Route::get('shipping/payment',[
    'uses'=> 'CheckoutController@payment',
    'as'=>'shipping_payment'
]);
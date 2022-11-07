<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::middleware(['auth'])->group(function(){
    Route::group([
        'prefix' => 'person',
        'namespace' => 'Person',
        'as' => 'person.',
    ], function(){
        Route::get('/orders', 'OrderController@index')->name('orders.index');
        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
    });
    
    Route::group([
        'namespace'=>'Admin',
        'prefix'=>'admin',
    ], function(){
        Route::group(['middleware'=>'is_admin'], function()  {
            Route::get('/orders', 'OrderController@index')->name('home');
            Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
        });
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    });
});



Route::get('/index', 'MainController@index')->name('index');
Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');

Route::group([
    'middleware'=>'basket_is_not_empty',
    'prefix'=>'basket',
], function(){
    Route::get('/', 'BasketController@basket')->name('basket');
    Route::get('//place', 'BasketController@basketPlace')->name('basket-place');
    Route::post('//remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
    Route::post('//place', 'BasketController@basketConfirm')->name('basket-confirm');
});

Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');











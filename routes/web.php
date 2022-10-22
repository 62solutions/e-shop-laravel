<?php

use Illuminate\Support\Facades\Route;



Route::get('/index', 'MainController@index')->name('index');
Route::get('/basket', 'MainController@basket')->name('basket');
Route::get('/basket/place', 'MainController@basketPlace')->name('basket-place');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');







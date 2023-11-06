<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::prefix('items')->group(function () {
    Route::get('/', 'ItemController@index')->name('items.index');
    Route::get('/create', 'ItemController@create')->name('items.create');
    Route::post('/store', 'ItemController@store')->name('items.store');
    Route::get('/{item}', 'ItemController@show')->name('items.show');
    Route::get('/{item}/edit', 'ItemController@edit')->name('items.edit');
    Route::put('/{item}', 'ItemController@update')->name('items.update');
    Route::delete('/{item}', 'ItemController@destroy')->name('items.destroy');
});

Route::prefix('checkins')->group(function () {
    // Define routes for checkins
});

Route::prefix('checkouts')->group(function () {
    // Define routes for checkouts
});

Route::prefix('customers')->group(function () {
    // Define routes for customers
});

Route::prefix('suppliers')->group(function () {
    // Define routes for suppliers
});

Route::prefix('users')->group(function () {
    // Define routes for users
});

// More routes can be defined as per your application's needs


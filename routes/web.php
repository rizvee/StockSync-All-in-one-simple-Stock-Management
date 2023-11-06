<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;

// Items Routes
Route::resource('items', ItemController::class);

// Checkins Routes
Route::resource('checkins', CheckinController::class);

// Checkouts Routes
Route::resource('checkouts', CheckoutController::class);

// Customers Routes
Route::resource('customers', CustomerController::class);

// Suppliers Routes
Route::resource('suppliers', SupplierController::class);

// Users Routes
Route::resource('users', UserController::class);

// Other routes and endpoints can be defined here

// For example, you can define additional custom routes for specific functionality.
// For example, a route for searching items.
Route::get('items/search', [ItemController::class, 'search'])->name('items.search');

// More routes can be defined based on the specific needs of your application.


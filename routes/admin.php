<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin-dashboard', 'middleware' => ['auth', 'role:1'], 'as' => 'admin.'], function () {


    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
    // Categories Route
    Route::resource('categories', CategoryController::class)->names('categories');

    // Products Route
    Route::resource('products', ProductController::class)->names('products');
});

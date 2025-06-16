<?php

use App\Http\Controllers\Customer\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customer-dashboard', 'middleware' => ['role:2','auth'], 'as' => 'customer.'], function () {



    Route::get('/', [PageController::class, 'home'])->name('home');
});

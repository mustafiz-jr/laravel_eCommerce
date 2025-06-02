<?php

use App\Http\Controllers\Customer\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customer-dashboard', 'middleware' => 'role:2', 'as' => 'customer.'], function () {



    Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
});

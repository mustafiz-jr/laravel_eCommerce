<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('add_category',[CategoryController::class,'add_category'])->name('add_category');

Route::get('admin_dash',[DashController::class,'admin_dash'])->name('admin_dash');

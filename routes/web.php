<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',HomeController::class)->name('home');
Route::get('/catalogue/{slug?}',ProductController::class)->name('catalogue');
//Route::get('/news',HomeController::class)->name('news');

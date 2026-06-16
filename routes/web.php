<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',HomeController::class)->name('home');
Route::get('/about',HomeController::class)->name('about');
Route::get('/production',HomeController::class)->name('production');
Route::get('/delivery',HomeController::class)->name('delivery');
Route::get('/catalogue',HomeController::class)->name('catalogue');
Route::get('/news',HomeController::class)->name('news');

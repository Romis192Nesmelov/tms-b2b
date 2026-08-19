<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',HomeController::class)->name('home');
Route::get('/search',SearchController::class)->name('search');
Route::get('/catalogue/{slug?}',ProductController::class)->name('catalogue');
//Route::get('/news/{slug?}',NewsController::class)->name('news');

Route::prefix('api')->name('api.')->group(function () {
    Route::post('message', [OrderController::class, 'message'])->name('message');
    Route::post('basket', [OrderController::class, 'basket'])->name('basket');
    Route::post('make-an-order', [OrderController::class, 'makeAnOrder'])->name('make-an-order');
});

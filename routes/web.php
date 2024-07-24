<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/propos', [HomeController::class, 'propos'])->name('propos');
Route::post('/message', [HomeController::class, 'store_message'])->name('store_message');
Route::get('/category/{category}/products', [HomeController::class, 'products'])->name('products');

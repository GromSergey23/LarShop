<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('index');

Route::get('/search', [StoreController::class, 'search'])->name('search');

Route::get('/sort/category', [StoreController::class, 'sort'])->name('sort.category');

Route::get('/sort/alfa', [StoreController::class, 'sort'])->name('sort.alfa');

Route::get('/sort/count', [StoreController::class, 'sort'])->name('sort.count');

Route::get('/sort/price', [StoreController::class, 'sort'])->name('sort.price');


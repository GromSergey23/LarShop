<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('index');

Route::get('/search', [StoreController::class, 'index'])->name('search');


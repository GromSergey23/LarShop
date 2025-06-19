<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('index');

Route::get('/search', [StoreController::class, 'search'])->name('search');

Route::get('/sort', [StoreController::class, 'sort'])->name('sort');

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');

Route::get('/registration', [AuthController::class, 'showRegistrationForm'])->name('showRegistration');

Route::post('/registration/create', [AuthController::class, 'registrationNewUser'])->name('registrationUser');




<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ThemeController;

Route::get('/', [ThemeController::class, 'home'])->name('home');
Route::get('/contact', [ThemeController::class, 'contact'])->name('contact');
Route::post('/set-theme', [ThemeController::class, 'setTheme'])->name('set.theme');


<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'home'])->name('home');
Route::get('/about', [HomePageController::class, 'aboutUs'])->name('about');


Route::get('/partnerships', [HomePageController::class, "partnerships"])->name('partnerships');
Route::get('/review', [HomePageController::class, "review"])->name('reviews');
Route::get('/opening-hours', [HomePageController::class, "openingHours"])->name('openingHours');

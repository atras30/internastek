<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'home'])->name('home');

Route::get('/partnerships', [HomePageController::class, "partnerships"])->name('partnerships');
Route::get('/review', [HomePageController::class, "review"])->name('reviews');
Route::get('/opening-hours', [HomePageController::class, "openingHours"])->name('openingHours');
Route::get('/contact-us', [HomePageController::class, "contactUs"])->name('contactUs');
Route::get('/about-us', [HomePageController::class, "aboutUs"])->name('aboutUs');
Route::get('/our-service', [HomePageController::class, "ourService"])->name('ourService');
Route::get('/opening-hours', [HomePageController::class, "openingHours"])->name('openingHours');
Route::get('/products', [HomePageController::class, "products"])->name('products');

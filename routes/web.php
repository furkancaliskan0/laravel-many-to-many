<?php

use Illuminate\Support\Facades\Route;

// Importo il "MainController".
use App\Http\Controllers\MainController;



// Home Route
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// Product Route
Route::get('/product', [MainController::class, 'products'])
    ->name('product.home');

// Create Route
Route::get('/product/create', [MainController::class, 'productCreate'])
    ->name('product.create');

// Store Route
Route::post('/product/create', [MainController::class, 'productStore'])
    ->name('product.store');
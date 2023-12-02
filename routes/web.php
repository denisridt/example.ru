<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

Route::match(['get', 'post'],'/categories/new', [CategoryController::class, 'new']);
Route::match(['get', 'post'],'/products/new', [ProductController::class, 'new']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::match(['get', 'post'],'/categories/{id}/update', [CategoryController::class, 'update']);
Route::match(['get', 'post'],'/products/{id}/update', [ProductController::class, 'update']);

Route::get('/categories/{id}/delete', [CategoryController::class, 'delete']);
Route::get('/products/{id}/delete', [ProductController::class, 'delete']);



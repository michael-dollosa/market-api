<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//import controllers
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

//user registration
Route::post('/register',[UserController::class, 'register']);
//user login
Route::post('/login',[UserController::class, 'login']);

//products CRUD
Route::get('/products',[ProductController::class, 'index']);
Route::post('/products',[ProductController::class, 'store']);
Route::get('/products/{id}',[ProductController::class, 'show']);
Route::put('/products/{id}',[ProductController::class, 'update']);
Route::delete('/products/{id}',[ProductController::class, 'destroy']);

//orders
Route::get('/orders',[OrderController::class, 'index']);

//commented out since authentication is not required
// Route::group(['middleware' => ['auth:sanctum']], function() {
//     //products CRUD
//     Route::get('/products',[ProductController::class, 'index']);
//     Route::post('/products',[ProductController::class, 'store']);
//     Route::get('/products/{id}',[ProductController::class, 'show']);
//     Route::put('/products/{id}',[ProductController::class, 'update']);
//     Route::delete('/products/{id}',[ProductController::class, 'destroy']);

//     //user tken
//     Route::post('/logout',[UserController::class, 'logout']);

// });
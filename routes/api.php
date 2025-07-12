<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', ProductController::class);
Route::post('/products/handle', ProductController::class);
Route::put('/products/update', ProductController::class);
Route::delete('/products/delete', ProductController::class);

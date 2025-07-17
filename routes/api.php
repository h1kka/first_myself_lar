<?php

use App\Http\Controllers\Api\ProductDeleteController;
use App\Http\Controllers\Api\ProductReadController;
use App\Http\Controllers\Api\ProductCreateController;
use App\Http\Controllers\Api\ProductUpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/products', ProductReadController::class);
Route::post('/products/create', ProductCreateController::class);
Route::put('/products/update/{id}', ProductUpdateController::class);
Route::delete('/products/delete/{id}', ProductDeleteController::class);



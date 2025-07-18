<?php

use App\Http\Controllers\Api\ProductDeleteController;
use App\Http\Controllers\Api\ProductReadController;
use App\Http\Controllers\Api\ProductCreateController;
use App\Http\Controllers\Api\ProductShowController;
use App\Http\Controllers\Api\ProductUpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('/products')->group(function () {
    Route::get('/{id}', ProductShowController::class,);
    Route::get('/', ProductReadController::class);
    Route::post('/create', ProductCreateController::class);
    Route::put('/update/{id}', ProductUpdateController::class);
    Route::delete('/delete/{id}', ProductDeleteController::class);
});




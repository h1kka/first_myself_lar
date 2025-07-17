<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Product extends EloquentModel
{
    protected $fillable = ['name', 'price'];


    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

}

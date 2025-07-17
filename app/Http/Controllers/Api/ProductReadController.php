<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductReadController extends Controller
{
    public function __invoke(Product $product)
    {
        return Product::all();
    }
}

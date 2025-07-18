<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductShowController extends Controller
{
    public function __invoke(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response(null, 204);
    }
}

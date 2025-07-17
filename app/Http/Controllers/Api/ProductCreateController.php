<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return $product;
    }
}

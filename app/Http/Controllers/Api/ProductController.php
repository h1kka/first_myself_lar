<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke(Product $product, StoreProductRequest $storeRequest, UpdateProductRequest $updateRequest, $type)
    {
        switch($type){
            case 'show':
                return response()->json(Product::all());
            case 'store':
                $product = Product::create($storeRequest->validated());
                return response()->json($product, 201);
            case 'update':
                $product ->update($updateRequest->validated());
                return response()->json($product);
            case 'destroy':
                $product-> delete();
                return Product::destroy($product);
            default: return response()->json(['Unknown type = $type'], 400);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        return $product;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index_products(){
        $products = Product::with('category')->get();
        return ProductResource::collection($products);
    }
    public function store_product(ProductStoreRequest $request){
        $data = $request->validated();
        $imagePath = request()->file('image')->store('products','public');
        $data['image'] = $imagePath;
        Product::create($data);
        return response()->json(['massage' => 'Successfully created product']);

    }
    public function show_product(Product $product){
        return response()->json(['Product' => ProductResource::make($product)]);
    }
    public function update_product(ProductUpdateRequest $request, Product $product){
        $data = $request->validated();
        if($request->hasFile('image')){
            $imagePath = request()->file('image')->store('products','public');
            $data['image'] = $imagePath;
            $oldImagePath = $product->getOriginal('image');
            $baseUrl = url('/storage/'); // This should match the base URL of your storage
            if (str_starts_with($oldImagePath, $baseUrl)) {
                $oldImagePath = substr($oldImagePath, strlen($baseUrl));
            }
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        $product->update($data);
        return response()->json(['massage' => 'Successfully updated product']);
    }
    public function delete_product(Product $product){
        $oldImagePath = $product->getOriginal('image');
        $baseUrl = url('/storage/');
        if (str_starts_with($oldImagePath, $baseUrl)) {
            $oldImagePath = substr($oldImagePath, strlen($baseUrl));
        }
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }
        $product->delete();
        return response()->json(['massage' => 'Successfully deleted product']);
    }


}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function store_category(CategoryStoreRequest $request){
        $data = $request->validated();
        $imagePath = request()->file('image')->store('categories','public');
        $data['image'] = $imagePath;
        Category::create($data);
        return response()->json(['message' => 'Successfully created category']);

    }
    public function index(){
        $categories = Category::all();
        return response()->json(['categories' => $categories]);
    }
    public function show(Category $category){
        return response()->json(['category' => $category]);
    }
    public function update_category(CategoryUpdateRequest $request, Category $category){
        $data = $request->validated();
        if($request->hasFile('image')){
            $imagePath = request()->file('image')->store('categories','public');
            $data['image'] = $imagePath;
            $oldImagePath = $category->getOriginal('image');
            $baseUrl = url('/storage/'); // This should match the base URL of your storage
            if (str_starts_with($oldImagePath, $baseUrl)) {
                $oldImagePath = substr($oldImagePath, strlen($baseUrl));
            }
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        $category->update($data);
        return response()->json(['massage' => 'Successfully updated category']);

    }
    public function delete_category(Category $category){
        $oldImagePath = $category->getOriginal('image');
        $baseUrl = url('/storage/');
        if (str_starts_with($oldImagePath, $baseUrl)) {
            $oldImagePath = substr($oldImagePath, strlen($baseUrl));
        }
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }
        $category->delete();
        return response()->json(['massage' => 'Successfully deleted category']);
    }
}

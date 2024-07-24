<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index_banners(){
        $banners = Banner::all();
        return response()->json(['banners' => $banners]);
    }
    public function store_banner(BannerStoreRequest $request){
        $data = $request->validated();
        $imagePath = request()->file('image')->store('banners','public');
        $data['image'] = $imagePath;
        Banner::create($data);
        return response()->json(['massage' => 'Successfully created banner']);

    }
    public function show_banner(Banner $banner){
        return response()->json(['banner' => $banner]);
    }
    public function update_banner(BannerUpdateRequest $request,Banner $banner){
        $data = $request->validated();
        if($request->hasFile('image')){
            $imagePath = request()->file('image')->store('banners','public');
            $data['image'] = $imagePath;
            $oldImagePath = $banner->getOriginal('image');
            $baseUrl = url('/storage/'); // This should match the base URL of your storage
            if (str_starts_with($oldImagePath, $baseUrl)) {
                $oldImagePath = substr($oldImagePath, strlen($baseUrl));
            }
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        $banner->update($data);
        return response()->json(['massage' => 'Successfully updated banner']);
    }

    public function delete_banner(Banner $banner){
        $oldImagePath = $banner->getOriginal('image');
        $baseUrl = url('/storage/');
        if (str_starts_with($oldImagePath, $baseUrl)) {
            $oldImagePath = substr($oldImagePath, strlen($baseUrl));
        }
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }
        $banner->delete();
        return response()->json(['massage' => 'Successfully deleted banner']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResumeStoreRequest;
use App\Http\Requests\ResumeUpdateRequest;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index(){
        $resumes = Resume::all();
        return response()->json(['resumes' => $resumes]);
    }
    public function show(Resume $resume){
        return response()->json(['resume' => $resume]);
    }
    public function store(ResumeStoreRequest $request){
        $data = $request->validated();
        $imagePath = request()->file('image')->store('resumes','public');
        $data['image'] = $imagePath;
        Resume::create($data);
        return response()->json(['massage' => 'Successfully created resume']);
    }
    public function update(Resume $resume, ResumeUpdateRequest $request){
        $data = $request->validated();
        if($request->hasFile('image')){
            $imagePath = request()->file('image')->store('resumes','public');
            $data['image'] = $imagePath;
            $oldImagePath = $resume->getOriginal('image'); // Get the raw path from the database

            // Extract the relative path from the URL
            $baseUrl = url('/storage/'); // This should match the base URL of your storage
            if (str_starts_with($oldImagePath, $baseUrl)) {
                $oldImagePath = substr($oldImagePath, strlen($baseUrl));
            }

            // Ensure the old path is relative to the storage directory
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        $resume->update($data);
        return response()->json(['message' => 'Successfully updated resume']);
    }
    public function destroy(Resume $resume){
        $oldImagePath = $resume->getOriginal('image');
        $baseUrl = url('/storage/');
        if (str_starts_with($oldImagePath, $baseUrl)) {
            $oldImagePath = substr($oldImagePath, strlen($baseUrl));
        }
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }
        $resume->delete();
        return response()->json(['message' => 'Successfully deleted resume']);
    }
}

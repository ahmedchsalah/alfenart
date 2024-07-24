<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReferenceStoreRequest;
use App\Http\Requests\ReferenceUpdateRequest;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $references = Reference::all();
        return response()->json(['references' => $references]);
    }

    /**
     * Show the form for creating a new resource.
     */

        //


    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferenceStoreRequest $request)
    {
        $data = $request->validated();
        $imagePath = request()->file('image')->store('references','public');
        $data['image'] = $imagePath;
        Reference::create($data);
        return response()->json(['massage' => 'Successfully created reference']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reference $reference)
    {
        return response()->json(['reference' => $reference]);
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(ReferenceUpdateRequest $request, Reference $reference)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $imagePath = request()->file('image')->store('references','public');
            $data['image'] = $imagePath;
            $oldImagePath = $reference->getOriginal('image');
            $baseUrl = url('/storage/'); // This should match the base URL of your storage
            if (str_starts_with($oldImagePath, $baseUrl)) {
                $oldImagePath = substr($oldImagePath, strlen($baseUrl));
            }
            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        $reference->update($data);
        return response()->json(['massage' => 'Successfully updated reference']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        $oldImagePath = $reference->getOriginal('image');
        $baseUrl = url('/storage/');
        if (str_starts_with($oldImagePath, $baseUrl)) {
            $oldImagePath = substr($oldImagePath, strlen($baseUrl));
        }
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            Storage::disk('public')->delete($oldImagePath);
        }
        $reference->delete();
        return response()->json(['massage' => 'Successfully deleted reference']);
    }
}

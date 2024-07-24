<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeStoreRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function store_type(TypeStoreRequest $request){
        $data = $request->validated();
        Type::create($data);
        return response()->json(['massage' => 'Successfully created type']);

    }
    public function index_types(){
        $types = Type::all();
        return response()->json(['types' => $types]);
    }
    public function delete_type(Type $type){
        $type->delete();
        return response()->json(['massage' => 'Successfully deleted type']);
    }


    public function try(){
        $types = Type::with(['contacts' => function ($query) {
            $query->oldest()->limit(1);
        }])->get();

        $firstContacts = $types->map(function ($type) {
            return $type->contacts->map(function ($contact) use ($type) {
                return [
                    'contact' => $contact,
                    'type_name' => $type->name,
                ];
            });
        })->flatten(1);
        return response()->json([ 'firstContacts' => $firstContacts]);
    }
}

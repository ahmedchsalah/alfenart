<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index_contacts(){
        $contacts = Contact::with('type')->orderBy('type_id', 'asc')->get();
        return ContactResource::collection($contacts);
    }
    public function store_contact(ContactStoreRequest $request){
        $data = $request->validated();
        Contact::create($data);
        return response()->json(['massage' => 'Successfully created contact']);
    }
    public function show_contact(Contact $contact){
        $contact->load('type');
        return response()->json(['contact' => $contact]);
    }
    public function update_contact(ContactUpdateRequest $request, Contact $contact){
        $data = $request->validated();
        $contact->update($data);
        return response()->json(['massage' => 'Successfully updated contact']);
    }
    public function delete_contact(Contact $contact){
        $contact->delete();
        return response()->json(['massage' => 'Successfully deleted contact']);
    }
}

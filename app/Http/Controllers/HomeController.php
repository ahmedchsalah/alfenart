<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageStoreRequest;
use App\Mail\UserMessage;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Message;
use App\Models\Reference;
use App\Models\Resume;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $banners = Banner::all();
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
        $references = Reference::all();
        $resume = Resume::all()->first();
        return view('index-light',['categories' => $categories,'banners' => $banners,
                                            'firstContacts' => $firstContacts,
                                            'references' => $references,
                                            'resume' => $resume]);
    }
    public function propos(){
        $categories = Category::all();
        $resume = Resume::all()->first();
        return view('single-post', ['categories' => $categories, 'resume' => $resume]);
    }
    public function store_message(MessageStoreRequest $request){

        $data = $request->validated();
        Message::create($data);
        $userEmail = $request->input('email');
        $messageContent = $request->input('message');
        Mail::to('admin@softarthosting.net')->send(new UserMessage( $messageContent));
        return response()->json(['message' => 'le message a été envoyé avec succés']);
    }

    public function products(Category $category){
        $categoryWithProducts = Category::with('products')->find($category->id);

        // Retrieve category name
        $categoryName = $categoryWithProducts->name;

        // Retrieve products associated with the category
        $products = $categoryWithProducts->products;

        return view('products', compact('products', 'categoryName'));
    }

}

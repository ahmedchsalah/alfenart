<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardInfo(){
        $contacts_num = Contact::all()->count();
        $categories_num = Category::all()->count();
        $products_num = Product::all()->count();
        $banners_num = Banner::all()->count();
        $messages_num = Message::all()->count();
        return response()->json(['contacts_num' => $contacts_num,
            'categories_num' => $categories_num,
            'products_num' => $products_num,
            'banners_num' => $banners_num,
            'messages_num' => $messages_num]);
    }
}

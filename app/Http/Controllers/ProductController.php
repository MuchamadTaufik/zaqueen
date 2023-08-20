<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
        {
            $title = '';
            if(request('category')) {
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in ' . $category->name;
            }

            return view('home',[
                "title" => "Zaqueen" . $title,
                // "post" => Product::all()
                "home" => Product::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
            ]);
        }

        public function show(Product $home)
        {
            return view ('posting',[
                "title" => "Single Post",
                "posting" => $home
            ]);
        }
}

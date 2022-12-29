<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('product', [
            "title" => "All Product",
            "active" => 'product',

            'css' => 'home.css',
            'button' => 'Read More',
            'srch' => 'Search',
//            "products" => Post::all()
            "product" => Product::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

        ]);
    }

    public function show(Product $product)
    {
        return view('products', [
            "title" => "Product Details",
            "active" => 'products',
            "product" => $product
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Cart;

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

    public function cart(Request $request)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $cart= new cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->addres=$user->address;
            $cart->product_tittle=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();


            return redirect()->back();
        }
        else
        {
            return rediredct('login');
        }
    }
}

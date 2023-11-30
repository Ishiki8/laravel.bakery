<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index')->with([
            'categories' => $this->categories(),
            'products' => $this->products(8)
        ]);
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();

        return view('category')->with([
            'category' => $category,
            'categories' => $this->categories()
        ]);
    }

    public function products($limit = 0) {
        $products = Product::get()->sortDesc();
        return $limit ? $products->slice(0, $limit) : $products;
    }

    public function categories() {
        return Category::get();
    }

    public function search() {
        return view('search')->with([
            'categories' => $this->categories()
        ]);
    }

    public function product($code) {
        $product = Product::where('code', $code)->first();

        return view('product')->with([
            'product' => $product,
            'categories' => $this->categories()
        ]);
    }

    public function registration() {
        return view('registration')->with([
            'categories' => $this->categories()
        ]);
    }

    public function login() {
        return view('login')->with([
            'categories' => $this->categories()
        ]);
    }

    public function admin() {
        return view('admin_panel._panel');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function userOrdersView() {
        $orders = Order::where('user_id', '=', auth()->id())->get()->sortDesc();

        return view('auth.user_orders')->with([
            'orders' => $orders,
            'categories' => Category::get(),
        ]);
    }

    public function search() {
        if (!isset($_GET['search'])) {
            return redirect(route('index'));
        }

        $products = Product::where('title', 'like', '%' . $_GET['search'] . '%')
            ->orWhere('description', 'like', '%' . $_GET['search'] . '%')
            ->get()
            ->sortDesc();

        return view('search')->with([
            'products' => $products,
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

    public function admin() {
        return view('admin._panel');
    }
}

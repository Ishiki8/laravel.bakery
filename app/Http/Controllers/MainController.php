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
        $categories = Category::get();

        return view('index')->with([
            'categories' => $categories,
            'products' => $this->products(8)
        ]);
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        $categories = Category::get();
        $products = $category->products()->paginate(4);

        return view('category')->with([
            'category' => $category,
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function products($limit = 0) {
        $products = Product::get()->sortDesc();
        return $limit ? $products->slice(0, $limit) : $products;
    }

    public function userOrdersView() {
        $orders = Order::where('user_id', '=', auth()->id())->get()->sortDesc();
        $categories = Category::get();

        return view('auth.user_orders')->with([
            'orders' => $orders,
            'categories' => $categories
        ]);
    }

    public function search() {
        if (!isset($_GET['search'])) {
            return redirect(route('index'));
        }

        $products = Product::where('title', 'like', '%' . $_GET['search'] . '%')
            ->orWhere('description', 'like', '%' . $_GET['search'] . '%')
            ->paginate(4)->appends(['search' => $_GET['search']]);

        $categories = Category::get();

        return view('search')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function product($code) {
        $product = Product::where('code', $code)->first();
        $categories = Category::get();

        return view('product')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function admin() {
        return view('admin._panel');
    }
}

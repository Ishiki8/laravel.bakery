<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products() {
        $products = Product::get();

        return view('admin.products.index')->with([
            'products' => $products
        ]);
    }
}

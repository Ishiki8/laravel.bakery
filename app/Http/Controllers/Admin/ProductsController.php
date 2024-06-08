<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id')->paginate(5);

        return view('admin.products.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.products.form')->with([
            'form_title' => 'Добавить продукцию',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $params = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }

        Product::create($params);

        return redirect(route('products.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::get();

        return view('admin.products.form')->with([
            'form_title' => 'Редактировать продукцию',
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        $currentImage = $product->getAttributes()['image'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
            Storage::delete($currentImage);
        } else {
            $params['image'] = $currentImage;
        }

        $product->update($params);

        return redirect(route('products.index'));
    }
}

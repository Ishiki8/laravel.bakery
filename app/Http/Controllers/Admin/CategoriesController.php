<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories() {
        $categories = Category::get();
        return view('admin.categories.index')->with([
            'categories' => $categories
        ]);
    }
}

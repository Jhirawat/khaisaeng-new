<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $category = Category::all();
        return view('home', compact('category'));
        // return Product::all();
    }
}

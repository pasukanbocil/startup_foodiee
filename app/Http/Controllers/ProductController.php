<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop', [
            'title' => 'Startup Foodiee - Product',
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function detail($id)
    {
        return view('shopdetail', [
            'title' => 'Startup Foodiee - Product Detail',
            'product' => Product::findOrFail($id),
        ]);
    }

    public function update()
    {

        
    }
}

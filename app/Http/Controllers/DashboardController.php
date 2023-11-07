<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function food()
    {
        return view('dashboard.food.index', [
            'title' => 'Startup Foodiee - Food Dashboard',
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.food.create', [
            'title' => 'Startup Foodiee - Create Food',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'image|file|max:1024',
            'category_id' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images-product');
        }


        Product::create($validatedData);

        return redirect('/dashboard/food')->with('success', 'New Food has been added!');
    }
}

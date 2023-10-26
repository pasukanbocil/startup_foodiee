<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Startup Foodiee - Home',
            'products' => Product::latest()->limit(8)->get(),
            'categories'=> Category::all()
        ]);
    }
    
}

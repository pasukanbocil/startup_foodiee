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
}

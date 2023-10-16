<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Startup Foodiee - Home'
        ]);
    }
}

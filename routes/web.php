<?php

use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Startup Foodiee - Home'
//     ]);
// });

Route::get('/', [HomeDashboardController::class, 'index']);

Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/detail/{id}', [ProductController::class, 'detail']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Startup Foodiee - Dashboard'
    ]);
});

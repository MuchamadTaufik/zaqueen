<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/contact', function(){
    return view('contact',[
        "title" => "Contact"
    ]);
});

Route::get('/', [ProductController::class,'index']);
Route::get('/posting/{home:slug}', [ProductController::class,'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Category',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/product/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/product', DashboardPostController::class)->middleware('auth');

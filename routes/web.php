<?php

use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Faqih Al Firdaus",
        "email" => "firdausfaqih727@gmail.com",
        "image" => "faqih.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

route::get('posts/{post:slug}', [PostController::class, 'show']);

route::get('/categories', function(){
    return view ('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' =>Category::all(),
    ]);
});


route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //hanya bisa di akses oleh user yang belom terauthentikasi
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

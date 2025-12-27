<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController; // Sửa: Admin viết hoa
use App\Http\Controllers\Admin\AdminController;    // Sửa: Admin viết hoa
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ContactController;
use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

// Trang chủ public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category_product/{category}', [HomeController::class, 'category_product'])->name('category_product');
// Các trang public khác
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Product detail
Route::get('/product/{id}', [HomeController::class, 'single_product'])->name('single_product');

Auth::routes();
Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.'
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('contact', ContactController::class);
});
    
    
    // Components
    
//admin category routes


Route::get('/logout-test', function () {
    Auth::logout();
    return 'Logged out';
});

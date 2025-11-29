<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController; // Sửa: Admin viết hoa
use App\Http\Controllers\Admin\AdminController;    // Sửa: Admin viết hoa
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

// Trang chủ public
Route::get('/', function () {
    return view('index');
})->name('home');

// Các trang public khác
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/product',[ProductController::class,'index'])->name('admin.product');
    
    
    
    // Components
    Route::get('/Button', function () {
        return view('admin/Components/Button');
    })->name('Button');
    
    Route::get('/Card', function () {
        return view('admin/Components/Card');
    })->name('Card');
    
    // Utilities
    Route::get('/other', function () {
        return view('admin/ul/other');
    })->name('other');
    
    Route::get('/colors', function () {
        return view('admin/ul/colors');
    })->name('colors');
    
    Route::get('/border', function () {
        return view('admin/ul/border');
    })->name('border');
    
    Route::get('/animation', function () {
        return view('admin/ul/animation');
    })->name('animation');
    
    // Chart & Table
    Route::get('/chart', function () {
        return view('admin/chart/chart');
    })->name('chart');
    
    Route::get('/table', function () {
        return view('admin/table/table');
    })->name('table');
    
    // Pages
    Route::get('/blank', function () {
        return view('admin/Page/blank');
    })->name('blank');
    
    Route::get('/404', function () {
        return view('admin/Page/404');
    })->name('404');


//admin category routes


Route::get('/logout-test', function () {
    Auth::logout();
    return 'Logged out';
});

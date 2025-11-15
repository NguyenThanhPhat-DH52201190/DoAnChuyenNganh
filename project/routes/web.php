<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
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



Route::get('/admin/category', function () {
    return view('admin/category/category_list');
})->name('category');
Route::get('/admin/product', function () {
    return view('admin/product/product_list');
})->name('product');
Route::get('/admin/register', function () {
    return view('admin/register/register');
})->name('register');
Route::get('/admin/forgotpassword', function () {
    return view('admin/forgot/forgotpassword');
})->name('forgotpassword');
Route::get('/admin/Button', function () {
    return view('admin/Components/Button');
})->name('Button');
Route::get('/admin/Card', function () {
    return view('admin/Components/Card');
})->name('Card');

Route::get('/admin/other', function () {
    return view('admin/ul/other');
})->name('other');
Route::get('/admin/colors', function () {
    return view('admin/ul/colors');
})->name('border');
Route::get('/admin/border', function () {
    return view('admin/ul/border');
})->name('border');
Route::get('/admin/animation', function () {
    return view('admin/ul/animation');
})->name('animation');
Route::get('/admin/chart', function () {
    return view('admin/chart/chart');
})->name('chart');
Route::get('/admin/table', function () {
    return view('admin/table/table');
})->name('table');
Route::get('/admin/blank', function () {
    return view('admin/Page/blank');
})->name('blank');
Route::get('/admin/404', function () {
    return view('admin/Page/404');
})->name('404');
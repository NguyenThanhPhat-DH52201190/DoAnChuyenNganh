<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category; // Đúng namespace model
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $categories = Category::all();
        view()->share(['categories', $categories]);
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category_list', compact('categories'));
    }
    
}


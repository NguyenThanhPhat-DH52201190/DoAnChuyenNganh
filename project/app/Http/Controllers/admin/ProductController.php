<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $products = Product::all();
        view()->share(['products', $products]);
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.product_list', compact('products'));
    }
    
}


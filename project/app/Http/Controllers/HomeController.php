<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Category::where('status', 1)->get(); // chỉ lấy active
        view()->share('categories', $categories);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::where('status', 1)->get(); // chỉ lấy active
        $products = Product::where('statuspro', 1)->get();
        return view('index', compact('categories', 'products'));
    }
    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/');
    }

    public function contact()
    {
        $contacts = Contact::first();
        return view('contact', compact('contacts'));
    }

    public function category_product($categoryId)
    {
        $products = Product::where(
            [
            ['category_id','=', $categoryId],
            ['statuspro','=', 1]
            ])->get();
            
        return view('home.category_product', compact('products'));
    }

    public function single_product($id)
    {
        $product = Product::where('idpro', $id)->firstOrFail();
        return view('home.single_product', compact('product'));
    }
}

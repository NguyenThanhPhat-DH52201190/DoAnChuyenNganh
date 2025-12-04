<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $products = Product::all();
        view()->share('products', $products); 
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product_list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create(
            [
                'namepro' => $request->namepro ?? '',
                'imagepro' => $request->image ?? '',
                'statuspro' => $request->status ?? 0,
                'descriptionpro' => $request->description ?? '',
                'price' => $request->price ?? 0,
                'category_id' => $request->category_id ??null,
            ]
        );
        
            return redirect()->route('admin.product.index')
                ->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
         $product = Product::findOrFail($product->idpro);
         $categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'namepro' => 'required|min:3',
    ]);
        $product = Product::findOrFail($product->idpro);
        $product->update([
        'namepro' => $request->namepro,
        'imagepro' => $request->imagepro ?? $product->imagepro,
        'statuspro' => $request->statuspro,
        'descriptionpro' => $request->descriptionpro,
        'price' => $request->price ?? 0,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('admin.product.index')
    ->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->idpro);
        $product->delete();
        return redirect()->route('admin.product.index')
            ->with('success', 'Product deleted successfully!');
    }
}

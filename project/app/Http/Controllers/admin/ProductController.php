<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view ('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create(
            [
                'namepro' => $request->name,
                'soluong' => $request->quantity,
            ]
        );
        if($product)
            return redirect()->route('admin.product.index');
        else
                return back();
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
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'namepro' => 'required|min:3',
        'soluong' => 'required|integer'
    ]);
        $product = Product::findOrFail($product->idpro);
        $product->update([
        'namepro' => $request->namepro,
        'soluong' => $request->soluong,
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

<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product::with('category')->paginate(10);
        return view('crud_products/products_index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('crud_products/products_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        return view('crud_products/products_show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        $categories = Category::all();
        return view('crud_products/products_edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}

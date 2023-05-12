<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $categories = category::all();
        return view('crud_categories/categories_index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud_categories/categories_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //

        return view('crud_categories/categories_show', compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
        return view('crud_categories/categories_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id . '|max:255',
            'description' => 'nullable',
        ]);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}

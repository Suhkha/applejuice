<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;

class CategoryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::all();
        return view('category-products.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category-products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cover' => 'required',
        ]);

        $file = $request->file('cover');
        $path = public_path() . '/category-products';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        $category = new CategoryProduct;
        $category->name = request('name');
        $category->cover = $fileName;
        $category->save();

        return redirect()->route('category-products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryProduct::find($id);
        return view('category-products.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/category-products';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
        }

        $category = CategoryProduct::find($id);
        $category->name = request('name');

        if($request->file('cover')) {
            $category->cover = $fileName;
        }
        
        $category->save();

        return redirect()->route('category-products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCategoryProduct($id)
    {
        $category = CategoryProduct::find($id);
        $category->delete();

        return redirect()->back();
    }
}

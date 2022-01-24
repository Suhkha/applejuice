<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('products.create', compact('categories'));
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
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'comments' => 'required',
        ]);

        $file = $request->file('image');
        $path = public_path() . '/products';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        $product = new Product;
        $product->category_id = request('category_id');
        $product->name = request('name');
        $product->image = $fileName;
        $product->comments = request('comments');
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = CategoryProduct::all();
        $product = Product::with('category')->where('id', $id)->first();
        
        return view('products.edit', compact('categories', 'product'));
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
        if($request->file('image')) {
            $file = $request->file('image');
            $path = public_path() . '/products';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
        }

        $category = CategoryProduct::find($id);
        $product->category_id = request('category_id');
        $category->name = request('name');
        $product->comments = request('comments');

        if($request->file('image')) {
            $category->cover = $fileName;
        }
        
        $category->save();

        return redirect()->route('products.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category')->where('id', $id)->first();
        return view('products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}
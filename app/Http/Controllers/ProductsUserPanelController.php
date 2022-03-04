<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Product;

class ProductsUserPanelController extends Controller
{
    public function index()
    {
        $categories = CategoryProduct::all();
        $products = Product::all();
        $favorites = Product::where('favorite', 1)->get();
        return view('panel.products', compact('categories', 'products', 'favorites'));  
        
    }

    public function showCategoryProducts($category_id) 
    {
        $category = CategoryProduct::find($category_id);
        $products = Product::where('category_id', $category_id)->get();
        return view('panel.products.category-products', compact('category', 'products')); 
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('panel.products.product', compact('product'));
    }
}

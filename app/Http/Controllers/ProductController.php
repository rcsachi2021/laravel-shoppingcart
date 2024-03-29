<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        
        return view('shop.show',compact('product'));
    }
}

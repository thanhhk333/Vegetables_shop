<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["product"] = Product::all();
        return view('products.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);;
        $viewData["products"] = $product;
        return view('products.show')->with("viewData", $viewData);
    }
}

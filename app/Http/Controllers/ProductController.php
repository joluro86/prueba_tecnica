<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortDesc();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $cities = Product::all();
        return view('products.create', compact('cities'));
    }

    public function store(Request $request){

        $product = New Product();

        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->value = $request->value;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('products.index');
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $product){
        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->value = $request->value;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}

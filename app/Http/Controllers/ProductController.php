<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(SaveProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product);
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    public function update(Product $product, SaveProductRequest $request){
        $product->update($request->validated());
        return redirect()->route('products.show', $product);
    }
    public function destory(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}

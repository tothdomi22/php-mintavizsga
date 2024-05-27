<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index', ['products' => Product::query()->latest()->paginate()]);
    }


    public function create()
    {
        return view('product.create');
    }


    public function store(ProductRequest $request)
    {
        Product::query()->create($request->validated());
        return redirect('/')->with('status', 'Item created successfully');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        return view('product.edit' ,['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect('/')->with('status', 'item updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/')->with('status', 'Item deleted successfully');
    }
}

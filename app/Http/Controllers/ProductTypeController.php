<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    // Display all product types
    public function index()
    {
        $productTypes = ProductType::all(); // Retrieve all product types
        return view('dashboard.product_types.index', compact('productTypes')); // Pass to view
    }

    // Show the form to create a new product type
    public function create()
    {
        return view('dashboard.product_types.create');
    }

    // Store a new product type
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ProductType::create($request->all());

        return redirect()->route('product_types.index')->with('success', 'Product type created successfully!');
    }

    public function update(Request $request, $id)
    {
        $product=ProductType::find($id);
        $product->name=$request->name;
        $product->save();

        return redirect()->route('product_types.index');
    }

    public function destroy(string $id)
    {
        $productType=ProductType::find($id);
        $productType->delete();
        return redirect('/product_types')->with('success','Deleted');
    }
}

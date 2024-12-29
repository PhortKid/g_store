<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::all();
        $products = Product::all();
        return view('dashboard.products.index', compact('products','productTypes'));
    }

    public function create()
    {
        $productTypes = ProductType::all();
        return view('dashboard.products.index', compact('productTypes'));
    }


  
/*
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_type_id' => 'required|exists:product_types,id',
            'quantity' => 'required|integer',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect('products');
    }

*/
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'product_type_id' => 'required|exists:product_types,id',
        'quantity' => 'required|integer|min:1', // Hakikisha ni namba chanya
        'purchase_price' => 'required|numeric',
        'sale_price' => 'required|numeric',
        'description' => 'required',
    ]);

    // Hifadhi mara kadhaa kulingana na quantity
    for ($i = 0; $i < $request->quantity; $i++) {
        Product::create([
            'name' => $request->name,
            'product_type_id' => $request->product_type_id,
            'quantity' => 1, // Weka quantity kuwa 1 kwa kila bidhaa
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'description' => $request->description,
        ]);
    }

    return redirect('products')->with('success', 'Products inserted successfully!');
}


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
           // 'product_type_id' => 'required|exists:product_types,id',
            'quantity' => 'required|integer',
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'description' => 'required',
        ]);

        $product=Product::find($id);
        $product->name=$request->input('name');
        $product->quantity=$request->input('quantity');
        $product->purchase_price=$request->input('purchase_price');
        $product->sale_price=$request->input('sale_price');
        $product->description=$request->input('description');
        $product->save();


        return redirect('products');
    }

    

    public function destroy(string $id)
    {
        $sale=Product::find($id);
        $sale->delete();
        return redirect('/products');
    }


    public function product_report()
{
    $productData = ProductType::withSum('products as total_quantity', 'quantity')->get();
    
    return view('dashboard.products.product_info', compact('productData'));
}
}

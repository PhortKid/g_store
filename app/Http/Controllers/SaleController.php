<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index(){
        $sales = Sale::all();
        $products=Product::where('is_approved','0')->get();
        return view('dashboard.sales.index')->with('sales',$sales)->with('products',$products);
        //return 1;
    }

    public function store(Request $request)
    {

        //return $request->product_info;
    
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'client_name' => 'required|string',
        ]);

      //  $sale = Sale::create($request->all());

        // Update product quantity
        $product = Product::find($request->product_id);

        $sale=new Sale;
        $sale->product_id=$product->id;
        $sale->client_name=$request->client_name;
        $sale->product_info=$request->product_info;
        $sale->total_price =$product->sale_price;
        $sale->save();

        return redirect()->route('sales.index');

        
    }

    public function destroy(string $id)
    {
        $sale=Sale::find($id);
        $sale->delete();
        return redirect('/sales')->with('success','Deleted');
    }

    public function update(Request $request, string $id){

        $sale=Sale::find($id);

        $product=Product::find($sale->product_id);
        $product->is_approved=1;
        $product->save();


        return redirect('/sales');
    }

    public function approved(){
        $sales = Sale::all();
        $products=Product::where('is_approved','1')->get();
        return view('dashboard.sales.approved')->with('sales',$sales)->with('products',$products);
        //return 1;
    }
}

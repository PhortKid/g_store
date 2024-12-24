<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       //Today
        $today = Carbon::today(); 
        $today_sale = Sale::whereDate('created_at', $today)->sum('total_price');

        //month
        $startOfMonth = Carbon::now()->startOfMonth(); 
        $endOfMonth = Carbon::now()->endOfMonth(); 
        $month_sale = Sale::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('total_price'); 


        //year
        $startOfYear = Carbon::now()->startOfYear(); 
        $endOfYear = Carbon::now()->endOfYear(); 
        $year_sale = Sale::whereBetween('created_at', [$startOfYear, $endOfYear])->sum('total_price');

        //all time
        $all_time_sale=Sale::all()->sum('total_price');


        $all_product=Product::all()->count();
        $product_approved=Product::where('is_approved','1')->get()->count();
        $product_remain=Product::where('is_approved','0')->get()->count();
        return view('dashboard.index',
        [
          'today_sale'=>$today_sale,
          'month_sale'=>$month_sale,
          'year_sale'=>$all_time_sale,
          'all_time_sale'=>$all_time_sale,
          'all_product'=>$all_product,
          'product_approved'=>$product_approved,
          'product_remain'=>$product_remain


        ]);
    }
}

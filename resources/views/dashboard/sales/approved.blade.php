<!-- resources/views/sales/index.blade.php -->

@extends('dashboard_layout.index')

@section('content')
<h2>Zilizouzwa</h2>
<div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD SALES</div></div>
  </div> 
<table class="table table-striped" id="example1">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Client Name</th>
            <th>Total Price</th>
            <th>Description</th>
            <th>Sale Date</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->product->name }}</td>
            <td>{{ $sale->client_name }}</td>
            <td>{{ number_format($sale->total_price, 2) }}</td>
            <td>{{ $sale->product_info }}</td>
            <td>{{ $sale->created_at->format('d-m-Y H:i') }}</td>
   

  
        </tr>
        
        @endforeach
    </tbody>
</table>




@endsection

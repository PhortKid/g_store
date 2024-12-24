<!-- resources/views/sales/index.blade.php -->

@extends('dashboard_layout.index')

@section('content')
<h2>Sales List</h2>
<div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD SALES</div></div>
  </div> 
<table class="table table-striped" id="example1">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Client Name</th>
            <th>Total Price</th>
            <th>Sale Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->product->name }}</td>
            <td>{{ $sale->client_name }}</td>
            <td>{{ number_format($sale->total_price, 2) }}</td>
            <td>{{ $sale->created_at->format('d-m-Y H:i') }}</td>
            <td>
            
            <a href='#'  data-bs-toggle="modal" data-bs-target="#ViewSale{{$sale->id}}"><i class='fa fa-eye text-primary'></i></a> | 
            
            <a href='#'  data-bs-toggle="modal" data-bs-target="#ApproveSales{{$sale->id}}"><i class='fa fa-check text-primary'></i></a> | 
            
            <a href='#'  data-bs-toggle="modal" data-bs-target="#DeleteSales{{$sale->id}}"><i class='fa fa-trash text-danger'></i></a>
            </td>

            @include('dashboard.sales.delete')
            @include('dashboard.sales.approve')
            @include('dashboard.sales.print')
        </tr>
        
        @endforeach
    </tbody>
</table>







<div class="modal fade " id="addmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD SALES</h5>
          
        </div>
        
        <div class="modal-body">
      
        <form action="{{ route('sales.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="product_id" class="form-label">Product</label>
        <select name="product_id" class="form-select" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="client_name" class="form-label">Client Name</label>
        <input type="text" name="client_name" class="form-control" required>
    </div>

    
    <div class="mb-3">
    <label for="product_info" class="form-label">Product Information</label>
    <textarea  id="" class="form-control" name="product_info"></textarea>  
    </div>

 

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            <button type="submit" class="btn btn-secondary">ADD</button>
        </div>
    </form>
         

       
       
        </div>
      </div>
    </div>
  </div>
@endsection

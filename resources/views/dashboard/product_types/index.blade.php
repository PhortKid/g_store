@extends('dashboard_layout.index')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE PRODUCT TYPES</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
   <div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD PRODUCT TYPES</div></div>
  </div> 
<div class="table-responsive">

<table   class="table table-bordered " id="dataTable" width="100%" cellspacing="0">

<thead class="text-dark">
<tr>
            <th>#</th>
            <th>Product Type Name</th>
            <th>Actions</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">


@if(count($productTypes)>0)
    
@foreach ($productTypes as $productType)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $productType->name }}</td>
           
               

            <td>
                <a href="#"  data-bs-toggle="modal" data-bs-target="#EditProductType{{$productType->id}}"><i class='fa fa-edit'></i></a> |
                <a href='#'  data-bs-toggle="modal" data-bs-target="#DeleteProductType{{$productType->id}}"><i class='fa fa-trash'></i></a>
            </td>
        </tr>

        @include('dashboard.product_types.edit')
        @include('dashboard.product_types.delete')
        @endforeach
@else 

  
  @endif



</tbody>
</table>
</div>   

      

<div class="modal fade " id="addmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD PRODUCT CATEGORIES</h5>
          
        </div>
        
        <div class="modal-body">
      
    <form action="{{ route('product_types.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Categories Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            <button type="submit" class="btn btn-secondary">ADD PRODUCT</button>
        </div>
    </form>
         

       
       
        </div>
      </div>
    </div>
  </div>


@endsection
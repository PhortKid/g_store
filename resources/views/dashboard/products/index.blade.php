@extends('dashboard_layout.index')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE PRODUCT</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
   <div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD PRODUCT</div></div>
  </div> 
<div class="table-responsive">

<table   class="table table-bordered " id="example1" width="100%" cellspacing="0">

<thead class="text-primar">
<tr>
<th>#</th>
<th>Username</th>
<th>Purchase</th>
<th>Sale Prrice</th>
<th>Description/IMEI</th>
<th>Date</th>
<th>Action</th>

</tr>
</thead>


<tbody class="table table-striped table-hover  ">

  <?php $i=1;  ?>
@if(count($products)>0)
    
   @foreach ($products as $product)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$product->name}} </td>
    <td>{{$product->purchase_price}}</td>
    <td>{{$product->sale_price}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->created_at}}</td>
    
    
    
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#EditProduct{{$product->id}}"><i class='fa fa-edit'></i></a> |
    <a href='#'  data-bs-toggle="modal" data-bs-target="#DeleteProduct{{$product->id}}"><i class='fa fa-trash'></i></a></td>
    
    @include('dashboard.products.edit')
    @include('dashboard.products.delete')
 
    </tr> 
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
          <h5 class="modal-title" id="staticBackdropLabel">ADD PRODUCT</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
        <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="product_type_id" class="form-label">Product Type</label>
        <select name="product_type_id" class="form-select" required>
            @foreach ($productTypes as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="purchase_price" class="form-label">Purchase Price</label>
        <input type="number" name="purchase_price" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="sale_price" class="form-label">Sale Price</label>
        <input type="number" name="sale_price" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Product Description</label>
        <textarea name="description" class="form-control" rows="3" required></textarea>
    </div>

    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-secondary">ADD PRODUCT</button>
</form>
            
       
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
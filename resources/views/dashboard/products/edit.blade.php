



<div class="modal fade " id="EditProduct{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
          
        </div>
        
        <div class="modal-body">
      {!! html()->form('PUT', route('products.update', $product->id))->open() !!}
      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required value="{{$product->name}}">
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
        <input type="number" name="quantity" class="form-control" required value="{{$product->quantity}}">
    </div>

    <div class="mb-3">
        <label for="purchase_price" class="form-label">Purchase Price</label>
        <input type="number" name="purchase_price" step="0.01" class="form-control" required value="{{$product->purchase_price}}">
    </div>

    <div class="mb-3">
        <label for="sale_price" class="form-label">Sale Price</label>
        <input type="number" name="sale_price" step="0.01" class="form-control" required value="{{$product->sale_price}}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Product Description</label>
        <textarea name="description" class="form-control" rows="3" required >{{$product->description}}</textarea>
    </div>

          @csrf
          {!! html()->hidden('_method', 'PUT') !!}
         

        


        
      
   
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            <button type="submit" class="btn btn-secondary">EDIT</button>
        </div>
    </form>
         

       
       
        </div>
      </div>
    </div>
  </div>




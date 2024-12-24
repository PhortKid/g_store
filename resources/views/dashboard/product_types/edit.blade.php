



<div class="modal fade " id="EditProductType{{$productType->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD PRODUCT</h5>
          
        </div>
        
        <div class="modal-body">
      {!! html()->form('PUT', route('product_types.update', $productType->id))->open() !!}
      <div class="mb-3">
            <label for="name" class="form-label">Product Type Name</label>
            <input type="text" name="name" class="form-control" required value="{{$productType->name}}">
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






<div class="modal fade" id="DeleteProduct{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
      
      </div>
      <div class="modal-body">
       
       Did you what to delete ??
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! html()->form('PUT', route('products.destroy', $product->id))->open() !!}
        @csrf
        {!! html()->hidden('_method', 'DELETE') !!}
        {!! html()->submit('Delete')->class('btn btn-danger') !!}
      </div>
      {!! html()->form()->close() !!}
    </div>
  </div>
</div>






  
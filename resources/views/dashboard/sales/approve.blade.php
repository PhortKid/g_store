

<div class="modal fade" id="ApproveSales{{$sale->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Approve</h5>
      
      </div>
      <div class="modal-body">
       
       Did you what to Approve??
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! html()->form('PUT', route('sales.update', $sale->id))->open() !!}
        @csrf
        {!! html()->hidden('_method', 'PUT') !!}
        {!! html()->submit('Approve ')->class('btn btn-primary') !!}
      </div>
      {!! html()->form()->close() !!}
    </div>
  </div>
</div>






  
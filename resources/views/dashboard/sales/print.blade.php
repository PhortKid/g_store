

<!-- View Sale Modal -->
<div class="modal fade" id="ViewSale{{$sale->id}}" tabindex="-1" aria-labelledby="ViewSaleLabel{{$sale->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewSaleLabel{{$sale->id}}">Invoice - Sale #{{$sale->id}}</h5>
            </div>
            <div class="modal-body">
                <!-- Printable Area -->
                <div id="printableArea{{$sale->id}}" class="printable-area">
                    <!-- Sale Details -->
                    <div>
                        <strong>Product Name:</strong> {{ $sale->product->name }}<br>
                        <strong>Client Name:</strong> {{ $sale->client_name }}<br>
                        <strong>Total Price:</strong> {{ number_format($sale->total_price, 2) }}<br>
                        <strong>Sale Date:</strong> {{ $sale->created_at->format('d-m-Y H:i') }}<br>
                        <strong>Product Information:</strong> {{ $sale->product->description }}<br>
                        <strong>Sale description:</strong> {{ $sale->product_info }}<br>
                        <strong>Brand:</strong> Free Market<br>
                        
                    </div>
                </div>
                <hr>
                <!-- Print Button -->
                <button class="btn btn-primary" onclick="printInvoice('printableArea{{$sale->id}}')">Print Invoice</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

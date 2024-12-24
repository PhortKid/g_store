<!-- View Sale Modal -->
<div class="modal fade" id="ViewSale{{$sale->id}}" tabindex="-1" aria-labelledby="ViewSaleLabel{{$sale->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ViewSaleLabel{{$sale->id}}">Invoice - Sale ##{{$sale->id}}</h5>
            </div>
            <div class="modal-body">
                <!-- Printable Area -->
                <div id="printableArea{{$sale->id}}" class="printable-area">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">Invoice Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Product Name</strong></td>
                                <td>{{ $sale->product->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Client Name</strong></td>
                                <td>{{ $sale->client_name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Price</strong></td>
                                <td>{{ number_format($sale->total_price, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Sale Date</strong></td>
                                <td>{{ $sale->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Product Information</strong></td>
                                <td>{{ $sale->product_info }}</td>
                            </tr>
                        </tbody>
                    </table>
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

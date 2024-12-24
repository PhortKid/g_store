<!-- resources/views/sales/create.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Record a Sale</h2>

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
        <label for="quantity_sold" class="form-label">Quantity Sold</label>
        <input type="number" name="quantity_sold" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="total_price" class="form-label">Total Price</label>
        <input type="number" name="total_price" step="0.01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Record Sale</button>
</form>
@endsection

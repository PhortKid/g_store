<!-- resources/views/products/create.blade.php -->

@extends('dashboard_layout.index')

@section('content')
<h2>Add New Product</h2>

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

    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

@endsection

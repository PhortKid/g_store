<!-- resources/views/product_types/index.blade.php -->

@extends('dashboard_layout.index')

@section('content')
<h2>Product Types</h2>



<a href="{{ route('product_types.create') }}" class="btn btn-primary mb-3">Add New Product Type</a>

<table class="table table-striped" id="example1">
    <thead>
        <tr>
            <th>#</th>
            <th>Product Type Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productTypes as $productType)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $productType->name }}</td>
            <td>
                <!-- Actions like Edit or Delete can go here -->
                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

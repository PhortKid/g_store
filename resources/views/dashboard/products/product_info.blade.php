@extends('dashboard_layout.index')


@section('content')
<h1>Product Report</h1>
<div class="row">
    @foreach ($productData as $productType)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {{ $productType->name }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $productType->total_quantity ?? 0 }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
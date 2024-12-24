@extends('dashboard_layout.index')

@section('content')

<div class="row">

@include('dashboard.sales')
@include('dashboard.product')
</div>
@endsection
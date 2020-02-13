@extends('layouts.app')

@section('title')
    Customer List
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href="customers/create">Add New Customer</a></p>
    </div>
</div>

@foreach($customers as $key => $customer)
<div class="row">
    <div class="col-2">
        {{ $customer->id }}
    </div>
    <div class="col-4">
        <a href="/customers/{{ $customer->id }}">{{ $customer->company->name }}</a>
    </div>
    {{-- <div class="col-4">{{ $customer->company->name }}</div> --}}
    <div class="col-2">{{ $customer->active }}</div>
</div>
@endforeach


@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

@endsection

@extends('layouts.app')

@section('title', 'Details for' . ' ' . $customer->company->name)

@section('content')

<div class="row">
    <div class="col-12">
        {{-- <h1>Details for {{ $customer->company->name }} {{ $customer->email }}</h1> --}}
        <h1>Details for {{ $customer->company->name }}</h1>
        <p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>

        <form action="/customers/{{ $customer->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
      <p><strong>Email</strong> {{ $customer->email }}</p>
      <p><strong>Phone</strong> {{ $customer->phone }}</p>
      <p><strong>Address</strong> {{ $customer->address }}</p>
      <p><strong>Website</strong> {{ $customer->web_url }}</p>
      <p><strong>Description</strong> {{ $customer->description }}</p>
      <p><strong>Company</strong> {{ $customer->company->name }}</p>
    </div>
</div>

@endsection

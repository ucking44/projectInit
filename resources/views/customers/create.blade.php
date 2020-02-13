@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Add New Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="/customers" method="POST">

 <div class="form-group">
     <label for="name">Email</label>
     <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
     <div>{{ $errors->first('email') }}</div>
 </div>

 <div class="form-group">
    <label for="name">Phone</label>
     <input type="text" name="phone" value="{{ old('phone') ?? $customer->phone }}" class="form-control">
     <div>{{ $errors->first('phone') }}</div>
 </div>

 <div class="form-group">
    <label for="name">Address</label>
     <input type="text" name="address" value="{{ old('address') ?? $customer->address }}" class="form-control">
     <div>{{ $errors->first('address') }}</div>
 </div>

 <div class="form-group">
    <label for="name">Website</label>
     <input type="text" name="web_url" value="{{ old('web_url') ?? $customer->web_url }}" class="form-control">
     <div>{{ $errors->first('web_url') }}</div>
 </div>

 <div class="form-group">
    <label for="massage">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

 <div class="form-group">
     <label for="active">Status</label>
     <select name="active" id="active" class="form-control">
         <option value="" disabled>Select Customer Status</option>
         <option value="1">Active</option>
         <option value="0">Inactive</option>
     </select>
 </div>

 <div class="form-group">
     <lable for="company_id">Company</lable>
     <select name="company_id" id="company_id" class="form-control">
         @foreach ($companies as $company)
             <option value="{{ $company->id }}">{{ $company->name }}</option>
         @endforeach
     </select>
 </div>

<button type="submit" class="btn btn-primary">Add Customer</button>

        @csrf
        </form>
    </div>
</div>
 @endsection

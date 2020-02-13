@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<h1>Contact Us</h1>

@if( ! session()->has('message'))

<form action="{{ route('contact.store') }}" method="POST">
    <div class="form-group">
        <label for="name">First Name</label>
         <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control">
         <div>{{ $errors->first('firstname') }}</div>
     </div>
    
     <div class="form-group">
         <label for="name">Surname</label>
         <input type="text" name="surname" value="{{ old('surname') }}" class="form-control">
         <div>{{ $errors->first('surname') }}</div>
     </div>
    
     <div class="form-group">
         <label for="name">Username</label>
         <input type="text" name="username" value="{{ old('username') }}" class="form-control">
         <div>{{ $errors->first('username') }}</div>
     </div>
    
     <div class="form-group">
         <label for="name">Email</label>
         <input type="text" name="email" value="{{ old('email') }}" class="form-control">
         <div>{{ $errors->first('email') }}</div>
     </div>

     <div class="form-group">
        <label for="massage">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Send message</button>
</form>

@endif

{{-- <p>Company Name</p>
<p>07065024160</p> --}}
@endsection
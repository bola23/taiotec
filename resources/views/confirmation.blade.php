<!-- confirmation.blade.php -->
@extends('shared/layout')
@section('content')

@if(session('formData'))
    <div>
        <h2>Order Confirmation</h2>
        <p>First Name: {{ session('formData.firstName') }}</p>
        <p>Last Name: {{ session('formData.lastName') }}</p>
        <!-- Display other form data as needed -->
    </div>
@endif

@endsection


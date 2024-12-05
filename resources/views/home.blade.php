@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to Car Rental</h1>
    <p>Find your perfect car to rent!</p>
    <a href="{{ route('cars.index') }}" class="btn btn-primary">View Cars</a>
</div>
@endsection

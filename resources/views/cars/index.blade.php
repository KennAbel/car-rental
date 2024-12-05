<!-- resources/views/cars/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Cars</h1>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $car->image }}" class="card-img-top" alt="{{ $car->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text">{{ $car->description }}</p>
                    <p class="card-text">Price: ${{ $car->price }}</p>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
<!-- resources/views/cars/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $car->name }}</h1>
    <img src="{{ $car->image }}" class="img-fluid" alt="{{ $car->name }}">
    <p>{{ $car->description }}</p>
    <p>Price: ${{ $car->price }}</p>
    <form action="{{ route('rent', $car->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Rent This Car</button>
    </form>
</div>
@endsection
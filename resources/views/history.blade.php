<!-- resources/views/history.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Rental History</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Car Name</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
            <tr>
                <td>{{ $rental->car->name }}</td>
                <td>{{ $rental->rental_date }}</td>
                <td>{{ $rental->return_date }}</td>
                <td>${{ $rental->total_price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
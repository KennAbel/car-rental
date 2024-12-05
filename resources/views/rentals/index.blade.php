<!-- resources/views/rentals/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Rental History</h1>

    @if($rentals->isEmpty())
        <p>You have no rental history.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Car</th>
                    <th>Rental Date</th>
                    <th>Return Date</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                    <tr>
                        <td>{{ $rental->car->name }}</td> <!-- Assuming the Car model has a 'name' attribute -->
                        <td>{{ $rental->rental_date->format('Y-m-d') }}</td>
                        <td>{{ $rental->return_date ? $rental->return_date->format('Y-m-d') : 'Not Returned' }}</td>
                        <td>${{ number_format($rental->total_price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
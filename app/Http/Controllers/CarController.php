<?php

// app/Http/Controllers/RentalController.php
namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function store(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        
        // Create a new rental record
        $rental = new Rental();
        $rental->user_id = Auth::id(); // Get the authenticated user's ID
        $rental->car_id = $car->id; // Set the car ID
        $rental->rental_date = now(); // Set the rental date to now
        $rental->return_date = null; // Set this when the car is returned
        $rental->total_price = $car->price; // Set the total price (you can modify this logic as needed)
        $rental->save(); // Save the rental record

        return redirect()->route('history')->with('success', 'Car rented successfully!');
    }

    public function index()
    {
        // Get the rental history for the authenticated user
        $rentals = Rental::with('car')->where('user_id', Auth::id())->get();
        return view('history', compact('rentals'));
    }
}

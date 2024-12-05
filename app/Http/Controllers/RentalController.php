<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $rentals = $user->rentals; // Access the rentals

        return view('rentals.index', compact('rentals')); // Pass rentals to the view
    }
}

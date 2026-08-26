<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
class BookingController extends Controller
{
public function index()
{
    return view('booking');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'service' => 'required',
        'booking_date' => 'required|date',
        'booking_time' => 'required'
    ]);

    Booking::create($request->all());

    return redirect('/')->with('success', 'Booking successful! We go call you soon!');
}
}

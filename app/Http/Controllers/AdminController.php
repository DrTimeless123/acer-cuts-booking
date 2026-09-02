<?php
namespace App\Http\Controllers;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('admin', compact('bookings'));
    }
}
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

        // YOUR WHATSAPP - 07026073609
        $myNumber = "2347026073609";
        $message = "🔥 NEW BOOKING! 🔥\nName: {$request->name}\nPhone: {$request->phone}\nService: {$request->service}\nDate: {$request->booking_date}\nTime: {$request->booking_time}";
        $whatsappLink = "https://wa.me/{$myNumber}?text=" . urlencode($message);

        return redirect()->away($whatsappLink);
    }
}
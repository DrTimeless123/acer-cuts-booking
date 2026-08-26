<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['name','phone', 'service', 'booking_date','booking_time'];
}

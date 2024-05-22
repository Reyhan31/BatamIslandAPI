<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingText extends Model
{
    use HasFactory;
    protected $table = 'bookingtext';

    protected $fillable = [
        "BookingText",
        "FormHeaderText",
        "FormHeaderText2",
        "FormSubText",
        "FormSubText2",
    ];
}

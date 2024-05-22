<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPanel extends Model
{
    use HasFactory;

    protected $table = 'bookingpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

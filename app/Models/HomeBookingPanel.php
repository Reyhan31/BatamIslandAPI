<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBookingPanel extends Model
{
    use HasFactory;

    protected $table = 'homebookingpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

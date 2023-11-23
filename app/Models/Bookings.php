<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        "custom_id",
        "status",
        "date",
        "name",
        "email",
        "phoneNumber",
        "packageName",
        "price",
        "isDeleted"
    ];
}

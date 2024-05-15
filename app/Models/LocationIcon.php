<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationIcon extends Model
{
    use HasFactory;

    protected $table = 'locationicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

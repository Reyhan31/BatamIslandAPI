<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneIcon extends Model
{
    use HasFactory;

    protected $table = 'phoneicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

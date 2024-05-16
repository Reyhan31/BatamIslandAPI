<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramIcon extends Model
{
    use HasFactory;

    protected $table = 'instagramicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

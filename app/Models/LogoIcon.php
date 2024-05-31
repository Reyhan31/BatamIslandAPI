<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoIcon extends Model
{
    use HasFactory;

    protected $table = 'logoicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebIcon extends Model
{
    use HasFactory;

    protected $table = 'webicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

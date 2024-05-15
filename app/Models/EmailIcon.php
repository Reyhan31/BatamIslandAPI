<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailIcon extends Model
{
    use HasFactory;

    protected $table = 'emailicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

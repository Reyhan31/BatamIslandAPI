<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsAppIcon extends Model
{
    use HasFactory;

    protected $table = 'whatsappicon';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

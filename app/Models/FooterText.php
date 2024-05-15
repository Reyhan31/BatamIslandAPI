<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterText extends Model
{
    use HasFactory;

    protected $table = 'footertext';

    protected $fillable = [
        "phoneNumber",
        "whatsAppNumber",
        "address",
        "email",
        "webUrl",
        "instagram",
    ];
}

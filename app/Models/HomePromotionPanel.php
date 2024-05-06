<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePromotionPanel extends Model
{
    use HasFactory;

    protected $table = 'homepromotionpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeNewsPanel extends Model
{
    use HasFactory;

    protected $table = 'homenewspanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

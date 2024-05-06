<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomePanel extends Model
{
    use HasFactory;

    protected $table = 'welcomepanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

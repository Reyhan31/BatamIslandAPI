<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPanel extends Model
{
    use HasFactory;
    
    protected $table = 'aboutuspanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

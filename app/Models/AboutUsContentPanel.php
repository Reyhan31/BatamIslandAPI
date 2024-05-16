<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContentPanel extends Model
{
    use HasFactory;

    protected $table = 'aboutuscontentpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsBannerPanel extends Model
{
    use HasFactory;

    protected $table = 'aboutusbannerpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

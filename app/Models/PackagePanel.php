<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePanel extends Model
{
    use HasFactory;
    protected $table = 'packagepanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

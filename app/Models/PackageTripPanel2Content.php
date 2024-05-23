<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTripPanel2Content extends Model
{
    use HasFactory;

    protected $table = 'packagetrippanel2content';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

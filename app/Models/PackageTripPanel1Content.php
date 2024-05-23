<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTripPanel1Content extends Model
{
    use HasFactory;

    protected $table = 'packagetrippanel1content';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTripPanel2 extends Model
{
    use HasFactory;

    protected $table = 'packagetrippanel2';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

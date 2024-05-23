<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTripPanel1 extends Model
{
    use HasFactory;

    protected $table = 'packagetrippanel1';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

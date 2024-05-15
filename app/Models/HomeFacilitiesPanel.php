<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFacilitiesPanel extends Model
{
    use HasFactory;
    protected $table = 'homefacilitiespanel';

    protected $fillable = [
        "file_id",
    ];
}

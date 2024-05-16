<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsText extends Model
{
    use HasFactory;

    protected $table = 'aboutustext';

    protected $fillable = [
        "AboutUsText",
        "HeaderContentText",
        "ContentText"
    ];
}

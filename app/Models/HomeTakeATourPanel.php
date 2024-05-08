<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTakeATourPanel extends Model
{
    use HasFactory;

    protected $table = 'hometakeatourpanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

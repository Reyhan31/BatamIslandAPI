<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPanel extends Model
{
    use HasFactory;
    protected $table = 'membershippanel';

    protected $fillable = [
        "filename",
        "mime_type"
    ];
}

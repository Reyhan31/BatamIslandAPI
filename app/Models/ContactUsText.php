<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsText extends Model
{
    use HasFactory;
    protected $table = 'contactustext';

    protected $fillable = [
        "ContactUsText",
        "FormText",
    ];
}

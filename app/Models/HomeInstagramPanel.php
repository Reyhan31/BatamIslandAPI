<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInstagramPanel extends Model
{
    use HasFactory;

    protected $table = 'homeinstagrampanel';

    protected $fillable = [
        "file_id",
    ];
}

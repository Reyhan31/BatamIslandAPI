<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageText extends Model
{
    use HasFactory;
    protected $table = 'packagetext';

    protected $fillable = [
        "PackageText",
        "Trip1FromText",
        "Trip1ToText",
        "Trip2FromText",
        "Trip2ToText",
        "Trip1InclusiveText",
        "Trip1ExclusiveText",
        "Trip1TermsText",
        "Trip2InclusiveText",
        "Trip2ExclusiveText",
        "Trip2TermsText"
    ];
}

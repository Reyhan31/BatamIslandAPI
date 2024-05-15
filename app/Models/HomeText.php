<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    use HasFactory;

    protected $table = 'hometext';

    protected $fillable = [
        "WelcomeText",
        "FacilitiesGolfCourseText",
        "FacilitiesTournamentsText",
        "FacilitiesCaddiesText",
        "FacilitiesGreenFieldsText",
        "BookingPanelText",
        "MembershipPanelHeaderText",
        "MembershipPanelSubText",
        "TakeATourPanelHeaderText",
        "TakeATourPanelSubText"
    ];
}
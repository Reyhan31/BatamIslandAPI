<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    use HasFactory;

    protected $table = 'hometext';

    protected $fillable = [
        "WelcomeSubHeaderText",
        "WelcomeMainHeaderText",
        "WelcomeToText",
        "FacilitiesGolfCourseHeaderText",
        "FacilitiesGolfCourseText",
        "FacilitiesTournamentsHeaderText",
        "FacilitiesTournamentsText",
        "FacilitiesCaddiesHeaderText",
        "FacilitiesCaddiesText",
        "FacilitiesGreenFieldsHeaderText",
        "FacilitiesGreenFieldsText",
        "BookingPanelText",
        "NewsText",
        "MembershipPanelHeaderText",
        "MembershipPanelSubText",
        "TakeATourPanelHeaderText",
        "TakeATourPanelSubText"
    ];
}

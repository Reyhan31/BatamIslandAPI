<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('homeText', function (Blueprint $table) {
            $table->id();
            $table->string("WelcomeText");
            $table->string("FacilitiesGolfCourseText");
            $table->string("FacilitiesTournamentsText");
            $table->string("FacilitiesCaddiesText");
            $table->string("FacilitiesGreenFieldsText");
            $table->string("BookingPanelText");
            $table->string("MembershipPanelHeaderText");
            $table->string("MembershipPanelSubText");
            $table->string("TakeATourPanelHeaderText");
            $table->string("TakeATourPanelSubText");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

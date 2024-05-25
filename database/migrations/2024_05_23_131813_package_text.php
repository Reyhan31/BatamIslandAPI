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
        Schema::create('packageText', function (Blueprint $table) {
            $table->id();
            $table->longText("PackageText");
            $table->longText("Trip1FromText");
            $table->longText("Trip1ToText");
            $table->longText("Trip2FromText");
            $table->longText("Trip2ToText");
            $table->longText("Trip1InclusiveText");
            $table->longText("Trip1ExclusiveText");
            $table->longText("Trip1TermsText");
            $table->longText("Trip2InclusiveText");
            $table->longText("Trip2ExclusiveText");
            $table->longText("Trip2TermsText");
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

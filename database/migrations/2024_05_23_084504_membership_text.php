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
        Schema::create('membershipText', function (Blueprint $table) {
            $table->id();
            $table->longText("MembershipText");
            $table->longText("GoldMemberHeaderText");
            $table->longText("GoldMemberContentText");
            $table->longText("PerksHeaderText");
            $table->longText("PriorityHeaderText");
            $table->longText("PriorityContentText");
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

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
        Schema::create('bookingText', function (Blueprint $table) {
            $table->id();
            $table->string("BookingText");
            $table->string("FormHeaderText");
            $table->string("FormHeaderText2");
            $table->string("FormSubText");
            $table->string("FormSubText2");
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

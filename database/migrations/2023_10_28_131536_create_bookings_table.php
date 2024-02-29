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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("custom_id");
            $table->string("status");
            $table->dateTime("date");
            $table->string("name");
            $table->string("email");
            $table->string("phoneNumber");
            $table->string("packageName");
            $table->decimal("price", 10, 2); 
            $table->boolean("isDeleted"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};

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
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("file_id");
            $table->string("packageName");
            $table->decimal("weekDayPrice", 10, 2); 
            $table->decimal("saturdayPrice", 10, 2);
            $table->decimal("sundayPrice", 10, 2);
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
        Schema::dropIfExists('package');
    }
};

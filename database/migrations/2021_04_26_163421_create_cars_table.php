<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model')->nullable();
            $table->string('license_plate_number')->unique();
            $table->string('Year')->nullable();
            $table->string('age')->nullable();
            $table->string('Motor_number')->unique();
            $table->string('chassis_number')->nullable();
            $table->string('location')->default('A.A');
            $table->string('service_type')->default('service');
            $table->integer('passenger_capacity')->nullable();
            $table->string('car_status')->default('Available');
            $table->integer('kilo_meter')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('cars');
    }
}

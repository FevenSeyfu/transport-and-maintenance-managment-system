<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Transport_id')->nullable();
            $table->string('feedback_rate')->nullable();            
            $table->string('feedback_text')->nullable();
            $table->string('feedback_By')->nullable();
            $table->timestamps();
            $table->foreign('Transport_id')
                    ->references('id')
                    ->on('transports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}

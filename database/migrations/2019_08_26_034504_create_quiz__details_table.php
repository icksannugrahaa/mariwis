<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('q_id');
            $table->string('qd_title');
            $table->string('qd_creator');
            $table->string('qd_about');
            $table->integer('qd_in');
            $table->integer('qd_max_user');
            $table->dateTime('qd_due_date');
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
        Schema::dropIfExists('quiz__details');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('q_id');
            $table->longText('qc_question');
            $table->string('qc_answer');
            $table->uuid('qc_key');
            $table->string('qc_images');
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
        Schema::dropIfExists('quiz__contents');
    }
}

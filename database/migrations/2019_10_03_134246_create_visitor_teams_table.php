<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_visitor_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('vg_uuid')->unique();
            $table->string('vg_number');
            $table->longText('vg_key')->nullable();
            $table->string('vg_saldo');
            $table->string('vg_payment_total');
            $table->uuid('vg_riw_saldo');
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
        Schema::dropIfExists('tb_visitor_groups');
    }
}

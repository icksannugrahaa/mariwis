<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_menu_childrens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid("mc_uuid")->unique();
            $table->string("mc_parent")->nullable();
            $table->string("mc_text");
            $table->string("mc_icon");
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
        Schema::dropIfExists('tb_menu_childrens');
    }
}

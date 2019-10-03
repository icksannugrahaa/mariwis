<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_visitor', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->uuid('vi_uuid')->unique(); //untuk pembeda antar user dan lebih sulit di tebak
            $table->string('vi_numbers')->unique(); //nomor pembelian
            $table->longText('vi_key')->nullable(); //key login
            $table->string('vi_firstname'); //nama
            $table->string('vi_lastname'); //nama
            $table->string('vi_identity_card_number')->unique(); //no ktp
            $table->string('vi_type'); //jenis pembelian solo/grup
            $table->integer('vi_visitor_login'); //total visitor yang udh login(pake kolom key buat ngehitung)
            $table->integer('vi_visitor_total'); //total visitor na mun lobaan (mun sa etik 1)
            $table->string('vi_saldo'); //saldo yg update terus seiring pembelian
            $table->string('vi_payment_total'); //total pembayarn yang sudah pernah di lakukan
            $table->string('vi_riw_saldo'); //mun beli saldo nanti masuk riwayat(saldo,paket,harga)(beda table)
            $table->timestamps(); //waktu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_visitor');
    }
}

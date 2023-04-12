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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer("proses_id");
            $table->integer("komponen_id");
            $table->boolean("status");
            $table->string("dibuat_oleh");
            $table->string("diedit_oleh");
            $table->string("diverifikasi_oleh");
            $table->dateTime("tanggal_verifikasi");
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
        Schema::dropIfExists('transaksi');
    }
};

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
        Schema::create('main_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('proses_id');
            $table->date('tanggal_transaksi');
            $table->string('dibuat_oleh');
            $table->string('diverifikasi_oleh');
            $table->date('diverifikasi_tanggal');
            $table->string('teknisi_oleh');
            $table->string('teknisi_tanggal');
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
        Schema::dropIfExists('main_transaksi');
    }
};

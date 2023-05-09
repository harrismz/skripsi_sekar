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
        //
        Schema::table('main_transaksi', function (Blueprint $table) {
            $table->string('diverifikasi_oleh')->nullable()->change();
            $table->datetime('diverifikasi_tanggal')->nullable()->change();
            $table->string('teknisi_oleh')->nullable()->change();
            $table->datetime('teknisi_tanggal')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_transaksi', function (Blueprint $table) {
            $table->string('diverifikasi_oleh')->change();
            $table->datetime('diverifikasi_tanggal')->change();
            $table->string('teknisi_oleh')->change();
            $table->datetime('teknisi_tanggal')->change();
        });
    }
};

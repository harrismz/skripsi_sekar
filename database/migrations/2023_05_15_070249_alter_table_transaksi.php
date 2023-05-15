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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->string('diedit_oleh')->nullable()->change();
            $table->string('diverifikasi_oleh')->nullable()->change();
            $table->string('tanggal_verifikasi')->nullable()->change();
            $table->string('status')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->string('diedit_oleh')->change();
            $table->string('diverifikasi_oleh')->change();
            $table->string('tanggal_verifikasi')->change();
            $table->integer('status')->nullable()->change();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi', function (Blueprint $table) {
            $table->integer('id_transaksi', true);
            $table->integer('id_pemesanan')->index('id_pemesanan');
            $table->timestamp('waktu_transaksi')->useCurrentOnUpdate()->useCurrent();
            $table->enum('status', ['Berhasil', 'Pending']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_transaksi');
    }
}

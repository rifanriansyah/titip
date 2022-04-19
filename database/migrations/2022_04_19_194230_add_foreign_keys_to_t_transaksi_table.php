<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_transaksi', function (Blueprint $table) {
            $table->foreign(['id_pemesanan'], 't_transaksi_ibfk_1')->references(['id_pemesanan'])->on('t_pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_transaksi', function (Blueprint $table) {
            $table->dropForeign('t_transaksi_ibfk_1');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_pemesanan', function (Blueprint $table) {
            $table->foreign(['id_locker'], 't_pemesanan_ibfk_1')->references(['id_locker'])->on('t_locker');
            $table->foreign(['id_user'], 't_pemesanan_ibfk_2')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_pemesanan', function (Blueprint $table) {
            $table->dropForeign('t_pemesanan_ibfk_1');
            $table->dropForeign('t_pemesanan_ibfk_2');
        });
    }
}

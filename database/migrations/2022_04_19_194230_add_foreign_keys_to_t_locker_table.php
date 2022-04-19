<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTLockerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_locker', function (Blueprint $table) {
            $table->foreign(['id_lokasi_loker'], 't_locker_ibfk_1')->references(['id_lokasi_loker'])->on('t_lokasi_loker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_locker', function (Blueprint $table) {
            $table->dropForeign('t_locker_ibfk_1');
        });
    }
}

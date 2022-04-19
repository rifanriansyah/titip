<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTRekeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_rekening', function (Blueprint $table) {
            $table->foreign(['id_user'], 't_rekening_ibfk_1')->references(['Id'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_rekening', function (Blueprint $table) {
            $table->dropForeign('t_rekening_ibfk_1');
        });
    }
}

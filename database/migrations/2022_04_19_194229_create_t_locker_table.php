<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLockerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_locker', function (Blueprint $table) {
            $table->integer('id_locker', true);
            $table->text('kode_loker');
            $table->enum('ukuran', ['S', 'M', 'L']);
            $table->bigInteger('harga');
            $table->enum('status', ['Tersedia', 'Tidak_tersedia']);
            $table->integer('id_lokasi_loker')->index('id_lokasi_loker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_locker');
    }
}

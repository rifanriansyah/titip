<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pemesanan', function (Blueprint $table) {
            $table->integer('id_pemesanan', true);
            $table->text('kode_pesan');
            $table->text('nama_pemesan');
            $table->timestamp('waktu_pemesanan')->useCurrentOnUpdate()->useCurrent();
            $table->bigInteger('total_harga');
            $table->enum('status', ['Belum_bayar', 'Sudah_bayar']);
            $table->integer('id_locker')->index('id_locker');
            $table->integer('id_user')->index('id_user');
            $table->integer('SELESAI')->default(0);
            $table->integer('EXPIRED')->default(0);
            $table->timestamp('delete_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pemesanan');
    }
}

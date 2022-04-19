<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('Id', true);
            $table->string('nama', 50);
            $table->text('nohp');
            $table->text('pin');
            $table->text('NIK')->nullable();
            $table->text('foto_nik')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('update_date')->nullable();
            $table->dateTime('delete_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}

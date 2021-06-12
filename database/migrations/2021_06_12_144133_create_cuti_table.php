<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pe_id');
            $table->unsignedInteger('cuti_id');
            $table->smallInteger('saldo');
            $table->smallInteger('durasi');
            $table->date('start');
            $table->date('end');
            $table->text('alamat');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('pe_id')->references('pe_id')->on('pegawai');
            $table->foreign('cuti_id')->references('id')->on('jenis_cuti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuti');
    }
}

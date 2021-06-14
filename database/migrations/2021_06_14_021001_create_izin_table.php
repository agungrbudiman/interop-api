<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pe_id');
            $table->unsignedInteger('izin_id');
            $table->smallInteger('durasi');
            $table->date('start');
            $table->date('end');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('pe_id')->references('pe_id')->on('pegawai');
            $table->foreign('izin_id')->references('id')->on('jenis_izin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izin');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('pe_id');
            $table->string('pe_nama',255);
            $table->string('pe_nip',30);
            $table->integer('pa_id');
            $table->string('pe_tempat_lahir',100);
            $table->date('pe_tanggal_lahir');
            $table->string('pe_jenis_kelamin',20);
            $table->integer('ag_id');
            $table->integer('st_id');
            $table->string('pe_no_hp',15);
            $table->string('pe_email',100);
            $table->string('pe_no_bpjs',30);
            $table->string('pr_id',2);
            $table->string('kb_id',4);
            $table->string('kc_id',7);
            $table->string('kl_id',10);
            $table->string('pe_alamat',255);
            $table->string('pe_hobi',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('petugas_id');
            $table->unsignedbigInteger('peminjams_id');
            $table->date('kartu_pembuatan');
            $table->date('kartu_akhir');
            $table->boolean('kartu_aktif');

              $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade');
              $table->foreign('peminjams_id')->references('id')->on('penimjams')->onDelete('cascade');
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
        Schema::dropIfExists('pendaftarans');
    }
}

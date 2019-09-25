<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('kategoris_id');
            $table->unsignedbigInteger('penerbits_id');
            $table->string('buku_judul');
            $table->integer('buku_jumlah');
            $table->string('buku_diskripsi');
            $table->string('buku_pengarang');
            $table->integer('buku_thn_terbit');

             $table->foreign('kategoris_id')->references('id')->on('kategoris')->onDelete('cascade');
             $table->foreign('penerbits_id')->references('id')->on('penerbits')->onDelete('cascade');
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
        Schema::dropIfExists('bukus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeninjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peninjamen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('petugas_id');
            $table->unsignedbigInteger('peminjams_id');
            $table->date('pjmn_tgl');
            $table->date('pjmn_tgl_kembali');

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
        Schema::dropIfExists('peninjamen');
    }
}

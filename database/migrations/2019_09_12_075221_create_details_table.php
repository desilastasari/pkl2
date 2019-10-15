<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('penimjams_id');
            $table->unsignedbigInteger('bukus_id');
            $table->date('detail_tgl_kembali');
            $table->string('detail_denda');
            $table->string('detail_kembali');
            
            $table->foreign('penimjams_id')->references('id')->on('penimjams')->onDelete('cascade');
            $table->foreign('bukus_id')->references('id')->on('bukus')->onDelete('cascade');
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
        Schema::dropIfExists('details');
    }
}

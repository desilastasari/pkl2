<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenimjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pjm_nama');
            $table->string('pjm_alamat');
            $table->integer('pjm_telp');
            $table->string('pjm_foto');
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
        Schema::dropIfExists('penimjams');
    }
}

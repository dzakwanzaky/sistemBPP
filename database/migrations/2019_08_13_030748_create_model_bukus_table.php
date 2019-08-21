<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_bukus', function (Blueprint $table) {
            $table->string('id');
            $table->string('judul_buku');
            $table->string('penulis');
            $table->string('price');
            $table->string('isbn');
            $table->string('cetakan');
            $table->string('tebal');
            $table->string('ukuran');
            $table->string('berat');
            $table->string('tanggal');
            $table->string('ketersediaan');
            $table->string('bahasa');
            $table->string('kategori');
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
        Schema::dropIfExists('model_bukus');
    }
}

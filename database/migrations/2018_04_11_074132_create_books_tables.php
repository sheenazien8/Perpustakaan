<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
          $table->increments('id');
          $table->string('judul_buku',250);
          $table->integer('tahun_terbit');
          $table->text('pengarang');
          $table->string('cover');
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
      //untuk ngerefresh
      Schema::dropIfExists('books');
    }
}

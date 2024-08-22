<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Danhmuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmucs', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('tendanhmuc',120);
            $table->string('anhdaidien',120);
            $table->integer('thutu')->unsigned();
            $table->integer('madanhmucha')->unsigned();
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
        Schema::dropIfExists('danhmuc');
    }
}

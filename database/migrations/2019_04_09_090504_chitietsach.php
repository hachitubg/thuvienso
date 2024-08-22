<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietsach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsachs', function (Blueprint $table) {
            $table->Integer('masach')->unsigned();
            $table->foreign('masach')->references('id')->on('sachs')->onDelete('cascade');
            $table->tinyInteger('mangonngu')->unsigned();
            $table->foreign('mangonngu')->references('id')->on('ngonngus')->onDelete('cascade');
            $table->integer('sotrang')->unsigned();
            $table->smallInteger('namxuatban')->unsigned();
            $table->longText('noidung');
            $table->integer('kichthuoc')->unsigned();
            $table->string('trongluong');
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
        Schema::dropIfExists('chitietsach');
    }
}

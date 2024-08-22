<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Taikhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoans', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->tinyInteger('maquyen')->unsigned();
            $table->foreign('maquyen')->references('id')->on('phanquyens')->onDelete('cascade');
            $table->smallInteger('manhanvien')->unsigned();
            $table->foreign('manhanvien')->references('id')->on('nhanviens')->onDelete('cascade');
            $table->string('username');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('taikhoan');
    }
}

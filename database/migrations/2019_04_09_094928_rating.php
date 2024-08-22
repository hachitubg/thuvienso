<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rattings', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->integer('masach')->unsigned();
            $table->foreign('masach')->references('id')->on('sachs')->onDelete('cascade');
            $table->smallInteger('makhachhang')->unsigned();
            $table->foreign('makhachhang')->references('id')->on('khachhangs')->onDelete('cascade');
            $table->integer('xeploai')->unsigned();
            $table->text('comment');
            $table->dateTime('ngaydang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}

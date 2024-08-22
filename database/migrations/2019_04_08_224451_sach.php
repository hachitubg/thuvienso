<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sachs', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('maloai')->unsigned();
            $table->foreign('maloai')->references('id')->on('loaisachs')->onDelete('cascade');
            $table->tinyInteger('manhaxuatban')->unsigned();
            $table->foreign('manhaxuatban')->references('id')->on('nhaxuatbans')->onDelete('cascade');
            $table->tinyInteger('matacgia')->unsigned();
            $table->foreign('matacgia')->references('id')->on('tacgias')->onDelete('cascade');
            $table->string('tensach');
            $table->smallInteger('soluong')->unsigned();
            $table->float('dongia')->unsigned();
            $table->smallInteger('luotxem')->default(0);
            $table->smallInteger('luotmua')->default(0);
            $table->smallInteger('hidden')->default(0);
            $table->tinyInteger('khuyenmai')->unsigned()->nullable();
            $table->string('anhbia');
            $table->smallInteger('tap')->unsigned();
            $table->smallInteger('sotap')->unsigned();
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
        Schema::dropIfExists('sach');
    }
}

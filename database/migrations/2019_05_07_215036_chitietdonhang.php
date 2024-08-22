<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietdonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_dondathang')->unsigned();
            $table->foreign('id_dondathang')->references('id')->on('dondathangs')->onDelete('cascade');
            $table->Integer('id_sach')->unsigned();
            $table->foreign('id_sach')->references('id')->on('sachs')->onDelete('cascade');
            $table->tinyInteger('soluong');
            $table->float('dongia');
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
        Schema::table('chitietdonhang', function (Blueprint $table) {
            //
        });
    }
}

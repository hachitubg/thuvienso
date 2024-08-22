<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createloaisach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisachs', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('madanhmuc')->unsigned();
            $table->foreign('madanhmuc')->references('id')->on('danhmucs')->onDelete('cascade');
            $table->string('tenloai',120);
            $table->string('anhbia',120);
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
        Schema::dropIfExists('loaisach');
    }
}

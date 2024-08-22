<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quangcao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcaos', function (Blueprint $table) {
            $table->smallInteger('maloaiquangcao')->unsigned();
            $table->foreign('maloaiquangcao')->references('id')->on('loaiquangcaos')->onDelete('cascade');
            $table->string('tenquangcao');
            $table->string('anh')->nullable();
            $table->longText('chitiet')->nullable();
            $table->string('lienket');
            $table->tinyInteger('thutu')->unsigned();
            $table->date('ngaydang');
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
        Schema::dropIfExists('quangcao');
    }
}

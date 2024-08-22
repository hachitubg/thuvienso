<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQltvMuonsachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qltv_muonsach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mamuon', 50);
            $table->dateTime('ngaymuon');
            $table->tinyInteger('hantra');
            $table->tinyInteger('soluong');
            $table->dateTime('ngaytra');
            $table->tinyInteger('tinhtrang'); // 0 chưa trả 1 đã trả 2 quá hạn

            // ccot khoa ngoai
            $table->integer('thuthu_id')->unsigned();
            $table->integer('docgia_id')->unsigned();
            $table->integer('sach_id')->unsigned();

            //Tao lien ket khoa ngoai
            $table->foreign('thuthu_id')->references('id')->on('qltv_thuthu');
            $table->foreign('docgia_id')->references('id')->on('qltv_docgia');
            $table->foreign('sach_id')->references('id')->on('qltv_sach');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qltv_muonsach');
    }
}

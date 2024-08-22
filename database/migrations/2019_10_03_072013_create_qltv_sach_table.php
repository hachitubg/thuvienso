<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQltvSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qltv_sach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masach',50);
            $table->string('tensach',500);
            $table->string('tentacgia',200);
            $table->decimal('soluong', 18, 0);
            $table->string('trangthaisach'); // 1 còn sách 2 hết sách
            $table->text('anh');

            // ccot khoa ngoai
            $table->integer('theloai_id')->unsigned();
            $table->integer('nxb_id')->unsigned();

            //Tao lien ket khoa ngoai
            $table->foreign('theloai_id')->references('id')->on('qltv_theloai');
            $table->foreign('nxb_id')->references('id')->on('qltv_nxb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qltv_sach');
    }
}

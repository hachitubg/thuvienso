<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dondathang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathangs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')->references('id')->on('khachhangs')->onDelete('cascade');
            $table->float('tongtien');
            $table->string('phuongthucthanhtoan');
            $table->string('hoten',100);
            $table->string('gioitinh',10);
            $table->string('email',150);
            $table->string('diachi');
            $table->string('sodienthoai',10);
            $table->string('ghichu');
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
        Schema::table('dondathang', function (Blueprint $table) {
            //
        });
    }
}

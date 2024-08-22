<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQltvDocgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qltv_docgia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('madocgia',50);
            $table->string('tendocgia', 200);
            $table->string('chucvu', 200);
            $table->string('gioitinh',200);
            $table->string('namsinh',200);
            $table->string('diachi',500);
            $table->string('sdt',25);
            $table->string('email',200);
            $table->string('quequan',200);
            $table->text('anh');

            // ccot khoa ngoai
            $table->integer('khoa_id')->unsigned();
            $table->integer('nganh_id')->unsigned();

            //Tao lien ket khoa ngoai
            $table->foreign('khoa_id')->references('id')->on('qltv_khoa');
            $table->foreign('nganh_id')->references('id')->on('qltv_nganh');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qltv_docgia');
    }
}

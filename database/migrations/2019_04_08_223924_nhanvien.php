<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->smallIncrements('id');;
            $table->string('ten',200);
            $table->string('sdt',15);
            $table->string('diachi');
            $table->string('mail');
            $table->string('gioitinh',50);
            $table->string('chucvu');
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
        Schema::dropIfExists('nhienvien');
    }
}

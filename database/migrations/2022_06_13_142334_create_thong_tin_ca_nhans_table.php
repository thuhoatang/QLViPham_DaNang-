<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_ca_nhans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('soCCCD');
            $table->string('hoTen');
            $table->unsignedBigInteger('id_phuongXa');
            $table->string('ngheNghiep');
            $table->string('sdt');
            $table->date('ngaySinh');

            $table->foreign('id_phuongXa')->references('id')->on('phuong_xas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_ca_nhans');
    }
};

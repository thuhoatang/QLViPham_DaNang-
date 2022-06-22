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
        Schema::create('tai_khoan_nguoi_tham_gia_giao_thongs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tenDangNhap");
            $table->string("matKhau");
            

            $table->string("soCCCD", 15);

            $table->foreign('soCCCD')->references('soCCCD')->on('thong_tin_ca_nhans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoan_nguoi_tham_gia_giao_thongs');
    }
};

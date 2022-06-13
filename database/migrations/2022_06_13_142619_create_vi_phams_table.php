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
        Schema::create('vi_phams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime("ngayGioViPham");
            $table->date("hanNopPhat");
            $table->date("thoiGianNop");
            $table->date("trangThaiNopPhat");
            $table->string("ghiChu");
            $table->bigInteger("tongTienPhat");

            $table->unsignedBigInteger("id_diachichitiet");
            $table->foreign('id_diachichitiet')->references('id')->on('dia_chi_chi_tiets');


            $table->unsignedBigInteger("id_thongtincanhan");

            $table->foreign('id_thongtincanhan')->references('id')->on('thong_tin_ca_nhans');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vi_phams');
    }
};

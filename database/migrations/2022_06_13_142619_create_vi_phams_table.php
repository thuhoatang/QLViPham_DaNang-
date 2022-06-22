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
            $table->datetime("ngayGioViPham")->nullable();
            $table->date("hanNopPhat")->nullable();
            $table->date("thoiGianNop")->nullable();
            $table->date("trangThaiNopPhat")->nullable();
            $table->string("ghiChu")->nullable();
            $table->bigInteger("tongTienPhat")->nullable();
            $table->boolean("trangthai_duyet")->nullable();
            $table->unsignedBigInteger("id_diachichitiet");
            $table->foreign('id_diachichitiet')->references('id')->on('dia_chi_chi_tiets');


            $table->string("soCCCD", 15);

            $table->foreign('soCCCD')->references('soCCCD')->on('thong_tin_ca_nhans');
            
            $table->string("bienSoXe", 15);
            $table->foreign('bienSoXe')->references('bienSoXe')->on('phuong_tiens');

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

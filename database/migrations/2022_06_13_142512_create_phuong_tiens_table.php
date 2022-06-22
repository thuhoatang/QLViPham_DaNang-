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
        Schema::create('phuong_tiens', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string("bienSoXe", 15);
            $table->string("tenPhuongTien");
            $table->string("mauXe");
            $table->string("nhanHieu");
            $table->date("ngayDangKi");
            $table->string("soCCCD", 15);
            $table->foreign('soCCCD')->references('soCCCD')->on('thong_tin_ca_nhans');
            $table->unsignedBigInteger("id_maLoai");
            $table->foreign('id_maLoai')->references('id')->on('loai_phuong_tiens');
            $table->primary("bienSoXe");
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuong_tiens');
    }
};

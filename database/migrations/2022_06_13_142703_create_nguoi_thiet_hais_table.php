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
        Schema::create('nguoi_thiet_hais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("tenNguoiThietHai")->nullable();
            $table->string("ghiChu")->nullable();


            $table->string("soCCCD", 15);

            $table->foreign('soCCCD')->references('soCCCD')->on('thong_tin_ca_nhans');

            $table->unsignedBigInteger("id_vipham");

            $table->foreign('id_vipham')->references('id')->on('vi_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_thiet_hais');
    }
};

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
        Schema::create('loi_vi_phams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("id_vipham");

            $table->unsignedBigInteger("id_luatGiaoThong");

            $table->foreign('id_luatGiaoThong')->references('id')->on('luat_giao_thongs');

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
        Schema::dropIfExists('loi_vi_phams');
    }
};

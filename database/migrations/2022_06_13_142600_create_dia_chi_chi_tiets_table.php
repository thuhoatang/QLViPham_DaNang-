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
        Schema::create('dia_chi_chi_tiets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tenDCCT");
            $table->unsignedBigInteger('id_phuongXa');
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
        Schema::dropIfExists('dia_chi_chi_tiets');
    }
};

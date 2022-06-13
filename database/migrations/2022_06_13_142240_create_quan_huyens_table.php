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
        Schema::create('quan_huyens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('quanHuyen', 60);
            $table->unsignedBigInteger('id_tinhThanh');

            $table->foreign('id_tinhThanh')->references('id')->on('tinh_thanhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quan_huyens');
    }
};

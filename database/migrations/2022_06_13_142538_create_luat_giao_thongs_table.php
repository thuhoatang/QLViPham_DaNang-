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
        Schema::create('luat_giao_thongs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tenLuatViPham");
            $table->bigInteger("tienPhat");
            $table->string("noiDungLuat")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luat_giao_thongs');
    }
};

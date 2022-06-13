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
        Schema::create('phuong_xas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('xaPhuong');
            $table->unsignedBigInteger('id_quanHuyen');

            $table->foreign('id_quanHuyen')->references('id')->on('quan_huyens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuong_xas');
    }
};

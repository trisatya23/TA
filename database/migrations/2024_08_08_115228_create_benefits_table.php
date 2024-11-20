<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string('transportasi');
            $table->string('file_transportasi')->nullable();
            $table->string('jumlah_transportasi')->default('0');
            $table->string('hotel');
            $table->string('file_hotel')->nullable();
            $table->string('jumlah_hotel')->default('0');
            $table->string('uang');
            $table->string('file_uang')->nullable();
            $table->string('jumlah_uang')->default('0');
            $table->unsignedBigInteger('id_masterdata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benefits');
    }
}

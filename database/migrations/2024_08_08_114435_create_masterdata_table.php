<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterdata', function (Blueprint $table) {
            $table->id();
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('destination');
            $table->string('travel_desc');
            $table->string('surat_perjalanan_dinas');
            $table->string('status')->default('Menunggu');
            $table->unsignedBigInteger('request')->nullable();
            $table->unsignedBigInteger('setujuortolak')->nullable();
            $table->unsignedBigInteger('validasi')->nullable();
            $table->string('kategori');
            $table->string('bukti_reimbursement');
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
        Schema::dropIfExists('masterdata');
    }
}

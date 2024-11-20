<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('manajemenuser');
            $table->json('manajemenrole');
            $table->json('perdi_request');
            $table->json('perdi_approve');
            $table->json('perdi_validasi');
            $table->json('reim_request');
            $table->json('reim_approve');
            $table->json('reim_validasi');
            $table->json('manajemenlogo');
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
        Schema::dropIfExists('roles');
    }
}

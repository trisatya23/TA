<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyUsersToMasterdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    // SQLSTATE[42S02]: Base table or view not found: 1146 Table 'perjalanan_dinas.masterdata' 
    // doesn't exist (SQL: alter table `masterdata` add constraint `masterdata_request_foreign` 
    // foreign key (`request`) references `users` (`id`) on delete cascade on update cascade)
    {
        Schema::table('masterdata', function (Blueprint $table) {
            $table->foreign("request")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign("setujuortolak")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign("validasi")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masterdata', function (Blueprint $table) {
            //
        });
    }
}

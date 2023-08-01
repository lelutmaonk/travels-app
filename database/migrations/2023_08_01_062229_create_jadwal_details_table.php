<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_details', function (Blueprint $table) {
            $table->id();
            $table->integer('jadwals_id');
            $table->string('waktu');
            $table->string('waktu_en');
            $table->string('aktivitas');
            $table->string('aktivitas_en');

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
        Schema::dropIfExists('jadwal_details');
    }
}

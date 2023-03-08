<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteraksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interaksis', function (Blueprint $table) {
            $table->id();
            $table->string('jadwal')->nullable();
            $table->string('nama_acara')->nullable();
            $table->string('pendengar')->nullable();
            $table->varchar('usia')->nullable();
            $table->string('kelamin')->nullable();
            $table->int('telepon')->nullable();
            $table->string('respon_pendengar')->nullable();
            $table->string('rating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interaksis');
    }
}
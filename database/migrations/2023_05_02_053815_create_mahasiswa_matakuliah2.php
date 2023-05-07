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
        Schema::create('mahasiswa_matakuliah2', function (Blueprint $table) {
            $table->id();
            $table->integer('mahasiswa_id');
            $table->unsignedBigInteger('matakuliah_id');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('Nim')->on('mahasiswa');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matakuliah2');
    }
};

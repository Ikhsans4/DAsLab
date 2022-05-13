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
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->string('nip_dosen');
            $table->string('kode_mk')->primary();
            $table->string('nama_mk');
            $table->integer('sks');
            $table->integer('semester');
            $table->string('jurusan');
            $table->text('link_pic')->default('https://media.istockphoto.com/vectors/science-lab-vector-id1266961630?b=1&k=20&m=1266961630&s=612x612&w=0&h=81P5mINR9skE5NkDQ6wV2fAt0g-r-m0b7e2grpsiT6k=');
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
        Schema::dropIfExists('matakuliahs');
    }
};

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
        Schema::create('krs_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mhs');
            $table->string('password');
            $table->string('image')->default('https://img.icons8.com/color/48/000000/user.png')->nullable();
            $table->foreign('nim_mhs')->references('nim')->on('mahasiswas');
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
        Schema::dropIfExists('krs_accounts');
    }
};

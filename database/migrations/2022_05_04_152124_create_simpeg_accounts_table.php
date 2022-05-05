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
        Schema::create('simpeg_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nip_dosen');
            $table->string('password');
            $table->string('image')->default('https://img.icons8.com/color/48/000000/administrator-male-skin-type-7.png')->nullable();
            $table->foreign('nip_dosen')->references('nip')->on('dosens');
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
        Schema::dropIfExists('simpeg_accounts');
    }
};

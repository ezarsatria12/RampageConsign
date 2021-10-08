<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alamat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idprovinsi');
            $table->foreignId('idkabupaten');
            $table->foreignId('idkecamatan');
            $table->foreignId('iddesa');
            $table->string('alamatrumah');
            $table->string('kodepos');
            $table->string('useraccept');
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
        Schema::dropIfExists('alamat');
    }
}

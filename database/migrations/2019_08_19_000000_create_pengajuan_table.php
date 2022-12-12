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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->text('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('norek');
            $table->string('namabank');
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('noktm');
            $table->longText('norekening');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
};

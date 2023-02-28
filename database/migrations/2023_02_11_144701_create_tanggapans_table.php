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
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger("pengaduan_id");
            // $table->foreign('pengaduan_id')->references('id')->on('pengaduans');
            $table->foreignId('pengaduan_id');
            // $table->date("tgl_tanggapan");
            $table->string("tanggapan");
            $table->foreignId('petugas_id');
            // $table->unsignedBigInteger("petugas_id");
            // $table->foreign('petugas_id ')->references('id')->on('petugas');
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
        Schema::dropIfExists('tanggapans');
    }
};

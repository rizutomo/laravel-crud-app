<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::table('pegawai', function (Blueprint $table) {
            $table->foreign('jenis_pegawai')->references('id')->on('jenis_pegawai');
            $table->foreign('status_pegawai')->references('id')->on('status_pegawai');
            $table->foreign('pendidikan')->references('id')->on('pendidikan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

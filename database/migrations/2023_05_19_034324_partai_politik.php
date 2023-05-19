<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kandidat', function(Blueprint $table){
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nama_partai');
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

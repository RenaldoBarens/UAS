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
        Schema::create('reservasi2s', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Cafe')->nullable();
            $table->text('Alamat')->nullable();
            $table->date('Tanggal_Reservasi')->nullable();
            $table->time('Jam')->nullable();
            $table->integer('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi2s');
    }
};

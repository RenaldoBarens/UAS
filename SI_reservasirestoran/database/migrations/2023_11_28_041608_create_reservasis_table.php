<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nama_Cafe')->nullable();
            $table->text('Alamat')->nullable();
            $table->date('Tanggal_Reservasi')->nullable();
            $table->time('Jam')->nullable();
            $table->integer('Status')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservasis');
    }
}

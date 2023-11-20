<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restorans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nama_Cafe')->nullable();
            $table->string('Alamat')->nullable();
            $table->integer('Rating')->nullable();
            $table->string('Tipe_Restoran')->nullable();
            $table->integer('Jarak')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restorans');
    }
}

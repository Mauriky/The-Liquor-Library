<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaLicores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('pais_origen');
            $table->string('sabor');
            $table->string('color');
            $table->float('porcentaje_alcohol');
            $table->integer('existencia');
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
        Schema::dropIfExists('licores');
    }
}

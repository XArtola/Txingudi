<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Txingudi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('logo');
            $table->string('foto');
            $table->string('hapertura');
            $table->string('hcierre');
            $table->timestamps();
        });
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idproducto');
            $table->string('idtienda');
            $table->string('nombre');
            $table->string('descripcion');
            $table->number('stock');
            $table->number('precio');
            $table->string('foto');
            $table->string('link');
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
        Schema::dropIfExists('tiendas');
    }
}

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
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->string('logo');
            $table->string('foto');
            $table->string('hapertura');
            $table->string('hcierre');
            $table->timestamps();
        });
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->string('idtienda');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->integer('stock');
            $table->float('precio',5,2);
            $table->string('foto');
            $table->string('link');
            $table->timestamps();

            $table->foreign('idtienda')
            ->references('id')
            ->on('tiendas')
            ->onDelete('cascade');
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

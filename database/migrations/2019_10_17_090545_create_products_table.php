<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->integer('idtienda');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->integer('stock');
            $table->float('precio', 5, 2);
            $table->string('foto');
            $table->string('link');
            $table->timestamps();

            $table->foreign('idtienda')
                ->references('id')
                ->on('shops')
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
        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->insert([
            'nombre' => 'Zapatos negrs',
            'descripcion' => 'Zapatos negros de cuero',
            'stock' => '15',
            'precio' => '39.95',
            'foto' => 'img/fotoTienda/zara.png',
            'link' => 'www.aasdads.com',
            'idtienda' => '1'
            ]);
    }
}

/*
SEGUIR MIRANDO DESDE AQUI
https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/

MIRAR BIEN CONFIGURACIÓN DE FOREIGN KEY


*/



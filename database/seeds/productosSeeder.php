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
            'name' => 'Zapatos negrs',
            'description' => 'Zapatos negros de cuero',
            'stock' => '15',
            'price' => '39.95',
            'photo' => 'img/fotoTienda/zara.png',
            'link' => 'www.aasdads.com',
            'shopId' => '1'
            ]);
    }
}

/*
SEGUIR MIRANDO DESDE AQUI
https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/

MIRAR BIEN CONFIGURACIÓN DE FOREIGN KEY


*/



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
            'name' => 'Zapatos negros',
            'description' => 'Zapatos negros de cuero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra ipsum, varius commodo risus. Curabitur porta, velit quis viverra accumsan, mauris metus varius ipsum, sed faucibus dui nisi et felis. Fusce dignissim mauris a elementum mattis. Nulla interdum erat eget lorem volutpat efficitur.',
            'stock' => '15',
            'price' => '39.95',
            'photo' => '1.jpg',
            'link' => 'www.zara.com',
            'shopId' => '1'
            ]);
    }
}

/*
SEGUIR MIRANDO DESDE AQUI
https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/

MIRAR BIEN CONFIGURACIÓN DE FOREIGN KEY


*/



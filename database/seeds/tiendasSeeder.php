<?php

use Illuminate\Database\Seeder;

class tiendasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('shops')->insert([
            'name' => 'Zara',
            'description' => 'Zara es una cadena de tiendas de moda española con sede en Arteixo, La Coruña perteneciente al grupo Inditex. Fue fundada por Amancio Ortega Gaona y Rosalía Mera.​ Es la cadena insignia del grupo textil Inditex y cuenta con más 2.040 tiendas repartidas por todo el mundo',
            'logo' => 'img/logo/logoZara.png',
            'photo' => 'img/foto/fotoZara',
            'openh' => '9:00',
            'closeh' => '22:00'
            ]);
    }
}




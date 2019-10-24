<?php

use Illuminate\Database\Seeder;
use App\Models\Shops;
class tiendasSeeder extends Seeder
{
    /**
     * Seed the application's database with shops info.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Shops::insert([
            [
                'name' => 'Zara',
                'description' => 'Zara es una cadena de tiendas de moda española con sede en Arteixo, La Coruña perteneciente al grupo Inditex. Fue fundada por Amancio Ortega Gaona y Rosalía Mera.​ Es la cadena insignia del grupo textil Inditex y cuenta con más 2.040 tiendas repartidas por todo el mundo',
                'logo' => 'images/logo/Zara.jpg',
                'photo' => 'images/fotoTienda/fotoZara.jpg',
                'openh' => '9:00',
                'closeh' => '22:00'
            ],
            [
                'name' => 'Decathlon',
                'description' => 'Decathlon es una multinacional Francesa dedicada a la ropa, complementos y material deportivo artículos de deporte. Decathlon es una cadena de establecimientos de grandes superficies, dedicada a la venta y distribución de material deportivo, filial del grupo francés Mulliez',
                'logo' => 'images/logo/Decathlon.jpg',
                'photo' => 'images/fotoTienda/fotoDecathlon.jpg',
                'openh' => '9:30',
                'closeh' => '21:30'
            ],
            [
                'name' => 'MerkalCalzados',
                'description' => 'Cadena de tiendas líder en la distribución de calzado en España. Sus amplias instalaciones permiten ofrecer al cliente todo tipo de estilos y calidades; desde el calzado más deportivo hasta el zapatos de fiesta, pasando por el casual, nuevas tendencias, clásicos o los obligados básicos',
                'logo' => 'images/logo/MerkalCalzados.jpg',
                'photo' => 'images/fotoTienda/fotoMerkalCalzados.jpg',
                'openh' => '9:30',
                'closeh' => '21:30'
            ],
            [
                'name' => 'Springfield',
                'description' => 'Springfield es una cadena española de tiendas de moda que cuenta con más de 1000 tiendas de ropa en 60 países. Pertenece al Grupo de distribución textil TENDAM, empresa del sector de la moda',
                'logo' => 'images/logo/Springfield.jpg',
                'photo' => 'images/fotoTienda/fotoSpringfield.jpg',
                'openh' => '10:00',
                'closeh' => '22:00'
            ],
            [
                'name' => 'Afede',
                'description' => 'Afede, un mundo de buenos y fantásticos juguetes con los que nuestros niños aprenderán jugando sano y divertido.',
                'logo' => 'images/logo/Afede.jpg',
                'photo' => 'images/fotoTienda/fotoAfede.jpg',
                'openh' => '10:00',
                'closeh' => '21:00'
            ],
            [
                'name' => 'Douglas',
                'description' => 'En perfumerías Douglas encontrarás los productos que más se adaptan a tus necesidades, las mejores marcas y el asesoramiento personalizado que buscas.',
                'logo' => 'images/logo/Douglas.jpg',
                'photo' => 'images/fotoTienda/fotoDouglas.jpg',
                'openh' => '10:00',
                'closeh' => '22:00'
            ]
        ]);
    }
}

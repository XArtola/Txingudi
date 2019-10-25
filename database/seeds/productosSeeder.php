<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class productosSeeder extends Seeder
{
    /**
     * Seed the application's database with products info.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Products::insert(
             /*PRODUCTOS DE ZARA (**SON DE PRUEBA**)*/
            [
                'name' => 'Zapatos negros',
                'description' => 'Zapatos negros de cuero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra ipsum, varius commodo risus. Curabitur porta, velit quis viverra accumsan, mauris metus varius ipsum, sed faucibus dui nisi et felis. Fusce dignissim mauris a elementum mattis. Nulla interdum erat eget lorem volutpat efficitur.',
                'stock' => '15',
                'price' => '39.95',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/embed/WWJtZSaSd7M',
                'language' => 'multi',
                'shopId' => '1'
            ],
            /*PRODUCTOS DE DECATHLON*/
            [
                'name' => 'Zapatillas Trail Running Salomon Trailster Hombre Negro',
                'description' => 'Pásate al trail running con las TRAILSTER. Concebidas para que practiques de forma segura por los caminos, estas zapatillas ofrecen la comodidad, la protección y el agarre necesarios para cada salida. ',
                'stock' => '15',
                'price' => '79.99',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/watch?v=DvDpj-4FPog&list=PLKKYyqiDzoOj1l02LSgj4DMoJi4j7lqfw?controls=0',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Sudadera Chándal Cremallera Capucha Gimnasia Pilates Domyos 900 Hombre Negro',
                'description' => 'Nuestros diseñadores han desarrollado esta chaqueta para abrigar antes/durante/después de la sesión de Pilates y Gimnasia suave. Aporte de calor elevado. ',
                'stock' => '12',
                'price' => '19.99',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/watch?v=DvDpj-4FPog&list=PLKKYyqiDzoOj1l02LSgj4DMoJi4j7lqfw?controls=0',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Capa 2 esquí hombre 900 Negro',
                'description' => ' Concebida para esquiadores que buscan una chaqueta térmica de esquí cálida, ligera y compacta.<br>Gracias a la composición de plumón, esta chaqueta térmica es ligera y cálida. Componente stretch para una excelente libertad de movimiento durante la práctica.  ',
                'stock' => '12',
                'price' => '44.99',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/watch?v=DvDpj-4FPog&list=PLKKYyqiDzoOj1l02LSgj4DMoJi4j7lqfw?controls=0',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Pantalón de Montaña y Trekking Forclaz Trek 500 Hombre',
                'description' => ' Nuestro equipo, apasionado de trekking en montaña, ha desarrollado este pantalón para hacer trekking con máxima comodidad.<br>La mejor relación entre duración y ligereza. ',
                'stock' => '5',
                'price' => '22.99',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/watch?v=DvDpj-4FPog&list=PLKKYyqiDzoOj1l02LSgj4DMoJi4j7lqfw?controls=0',
                'language' => 'multi',
                'shopId' => '1'
            ]

            /*PRODUCTOS DE MERKALCALZADOS*/

            /*PRODUCTOS DE SPRINGFIELD*/



        );
    }
}

/*
SEGUIR MIRANDO DESDE AQUI
https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/

MIRAR BIEN CONFIGURACIÓN DE FOREIGN KEY


*/

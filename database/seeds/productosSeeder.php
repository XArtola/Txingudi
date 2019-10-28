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
        Products::insert([
             /*PRODUCTOS DE ZARA (**SON DE PRUEBA**)
            [
                'name' => 'Zapatos negros',
                'description' => 'Zapatos negros de cuero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra ipsum, varius commodo risus. Curabitur porta, velit quis viverra accumsan, mauris metus varius ipsum, sed faucibus dui nisi et felis. Fusce dignissim mauris a elementum mattis. Nulla interdum erat eget lorem volutpat efficitur.',
                'stock' => '15',
                'price' => '39.95',
                'photo' => '1.jpg',
                'link' => 'https://www.youtube.com/embed/WWJtZSaSd7M',
                'language' => 'multi',
                'shopId' => '1'
            ],*/
            /*PRODUCTOS DE OROVIVO */
            [
                'name' => 'Anillo ancho de acero con detalle de purpurina',
                'description' => 'Todo el estilo del acero en una pieza única.<br>Anillo de acero ancho con detalle de purpurina.<br>Una pieza de la colección Steel Bling Bling que encaja con perfección con el universo Fashion. ',
                'stock' => '4',
                'price' => '14.90',
                'photo' => '1.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Pendientes de acero martelée',
                'description' => 'Todo el estilo del acero en una pieza única.<br>Pendientes de acero en forma de media criolla martelée.<br>Una pieza de la colección Steel Style que encaja con perfección con el universo Fashion. ',
                'stock' => '5',
                'price' => '14.90',
                'photo' => '2.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Collar de plata doble círculo con circonita',
                'description' => 'Todo el estilo del acero en una pieza única.<br>Pendientes de acero en forma de media criolla martelée.<br>Una pieza de la colección Steel Style que encaja con perfección con el universo Fashion. ',
                'stock' => '1',
                'price' => '14.90',
                'photo' => '3.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Reloj Tissot Gent XL T1164101604700 con correa de cuero marrón y esfera azul',
                'description' => 'El estilo único e inconfundible de los relojes Tissot que te acompaña cada día.<br>Reloj para hombre con correa de cuero marrón y esfera azul, caja de acero con diámetro de 42 mm y resistencia al agua de 10 ATM. Con 2 años de garantía. ',
                'stock' => '9',
                'price' => '240.00',
                'photo' => '4.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => ' Clip Pandora 798560C00 de plata en forma de banda de corazones',
                'description' => 'Déjate enamorar de la sofisticación y delicadeza de los productos Pandora.<br>Clip de plata con detalle de banda en forma de corazones.',
                'stock' => '12',
                'price' => '29.00',
                'photo' => '5.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],
            [
                'name' => 'Reloj Tissot Gent XL T1164101604700 con correa de cuero marrón y esfera azul',
                'description' => 'Calvin Klein ofrece las joyas más elegantes y modernas, el toque perfecto.<br>Un diseño único y sorprendente, descubre el Choker Beyond.',
                'stock' => '20',
                'price' => '129.00',
                'photo' => '6.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '1'
            ],

            /*PRODUCTOS DE DECATHLON*/
            [
                'name' => 'Zapatillas Trail Running Salomon Trailster Hombre Negro',
                'description' => 'Pásate al trail running con las TRAILSTER. Concebidas para que practiques de forma segura por los caminos, estas zapatillas ofrecen la comodidad, la protección y el agarre necesarios para cada salida. ',
                'stock' => '15',
                'price' => '79.99',
                'photo' => '7.jpg',
                'link' => 'https://www.youtube.com/embed/If-J5bgDQEw',
                'language' => 'multi',
                'shopId' => '2'
            ],
            [
                'name' => 'Sudadera Chándal Cremallera Capucha Gimnasia Pilates Domyos 900 Hombre Negro',
                'description' => 'Nuestros diseñadores han desarrollado esta chaqueta para abrigar antes/durante/después de la sesión de Pilates y Gimnasia suave. Aporte de calor elevado. ',
                'stock' => '12',
                'price' => '19.99',
                'photo' => '8.webp',
                'link' => 'https://www.youtube.com/embed/If-J5bgDQEw',
                'language' => 'es',
                'shopId' => '2'
            ],
            [
                'name' => 'Capa 2 esquí hombre 900 Negro',
                'description' => ' Concebida para esquiadores que buscan una chaqueta térmica de esquí cálida, ligera y compacta.<br>Gracias a la composición de plumón, esta chaqueta térmica es ligera y cálida. Componente stretch para una excelente libertad de movimiento durante la práctica.  ',
                'stock' => '12',
                'price' => '44.99',
                'photo' => '9.webp',
                'link' => 'https://www.youtube.com/embed/If-J5bgDQEw',
                'language' => 'multi',
                'shopId' => '2'
            ],
            [
                'name' => 'Pantalón de Montaña y Trekking Forclaz Trek 500 Hombre',
                'description' => ' Nuestro equipo, apasionado de trekking en montaña, ha desarrollado este pantalón para hacer trekking con máxima comodidad.<br>La mejor relación entre duración y ligereza. ',
                'stock' => '5',
                'price' => '22.99',
                'photo' => '10.webp',
                'link' => 'https://www.youtube.com/embed/If-J5bgDQEw',
                'language' => 'en',
                'shopId' => '2'
            ],
            [
                'name' => 'BICICLETA DE MONTAÑA 27,5" ROCKRIDER ST 520 NEGRO AZUL',
                'description' => ' Nuestro equipo ha concebido esta BTT de 27,5", cómoda con frenos de disco mecánicos, para las travesías de BTT, de 2 a 3 horas, durante todo el año.<br>Comodidad ante todo:sillín cóncavo, geometría del cuadro, potencia ajustable. Eficacia de las ruedas 27,5" con llantas de doble pared y de 24 velocidades. Ventaja: Frenos de disco mecánicos. ',
                'stock' => '5',
                'price' => '249.99',
                'photo' => '11.webp',
                'link' => 'https://www.youtube.com/embed/If-J5bgDQEw',
                'language' => 'multi',
                'shopId' => '2'
            ],
            [
                'name' => "Tabla Surf Espuma Evolutiva Olaian 100 8' Adulto Turquesa Naranja Leash Quillas",
                'description' => ' Nuestro equipo de diseñadores surfistas ha creado esta tabla para principiantes de 40 a 70 kg. Adaptada a un uso ocasional por surfistas más experimentados.<br>La tabla de surf para comenzar a practicar el surf y progresar con total seguridad. Incluye leash y 3 quillas no cortantes. Encerar para no resbalar. No apta para escuelas de surf',
                'stock' => '5',
                'price' => '149.99',
                'photo' => '12.webp',
                'link' => 'https://www.youtube.com/embed/lHtJC3rMql8',
                'language' => 'multi',
                'shopId' => '2'
            ],

            /*PRODUCTOS DE MERKALCALZADOS*/

            [
                'name' => 'Botín borlas OH GIRL',
                'description' => '',
                'stock' => '15',
                'price' => '29.99',
                'photo' => '13.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],
            [
                'name' => 'Botín motorista estrella OH GIRL',
                'description' => '',
                'stock' => '14',
                'price' => '29.99',
                'photo' => '14.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],
            [
                'name' => 'Zapatilla casa estrellas OLYNE',
                'description' => '',
                'stock' => '12',
                'price' => '7.99',
                'photo' => '15.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],
            [
                'name' => 'Zapatilla bebé REEBOK ROYAL CLJOG 2',
                'description' => '',
                'stock' => '5',
                'price' => '30.00',
                'photo' => '16.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],
            [
                'name' => 'Zapatilla casa cerrada SPIDERMAN',
                'description' => '',
                'stock' => '5',
                'price' => '11.99',
                'photo' => '17.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],
            [
                'name' => 'Zapatilla casa elásticos SPIDERMAN',
                'description' => '',
                'stock' => '5',
                'price' => '11.99',
                'photo' => '18.jpg',
                'link' => 'https://www.youtube.com/embed/hfNGi7caHHc',
                'language' => 'multi',
                'shopId' => '3'
            ],


            /*PRODUCTOS DE SPRINGFIELD*/

            
            [
                'name' => 'Jersey intarsia montaña',
                'description' => 'Jersey cuello redondo en punto liso galga más gruesa. Intarsia motivo montaña en el pecho. ',
                'stock' => '17',
                'price' => '32.99',
                'photo' => '19.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],
            [
                'name' => 'Jersey bloque de color',
                'description' => 'Jersey bloque de color punto liso. Detalle de etiqueta de PU en el pecho. Hilo de 100% cotton melange.',
                'stock' => '15',
                'price' => '25.99',
                'photo' => '20.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],
            [
                'name' => 'Cazadora efecto piel doble faz',
                'description' => 'Cazadora tipo aviador en tejido efecto piel doble faz con cuello camisero borreguillo, cierre de cremallera, bolsillo plastrón, y puños y bajo en punto elástico. ',
                'stock' => '20',
                'price' => '89.99',
                'photo' => '21.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],
            [
                'name' => 'Jersey cuello jacquard ',
                'description' => 'Jersey de manga larga, con cuello redondo, con jacquard de cenefas posicionado en el cuello',
                'stock' => '20',
                'price' => '29.99',
                'photo' => '22.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],
            [
                'name' => 'Parka detalles metálicos sorona',
                'description' => 'Parka con capucha con pelo, con bolsilos en los laterales, con cierre de cremallera con tapeta y detalles metálicos. Relleno Sorona un material ligero, transpirable con tecnologia patentada. Material de origen sostenible.',
                'stock' => '20',
                'price' => '79.99',
                'photo' => '23.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],
            [
                'name' => 'Abrigo cuello solapa ',
                'description' => 'Abrigo con cuello con solapa, con bolsillos en los laterales con tapeta y con cierre de botones metálicos redondos',
                'stock' => '13',
                'price' => '79.99',
                'photo' => '24.jpg',
                'link' => 'https://www.youtube.com/embed/7QZGSiSnxyE',
                'language' => 'multi',
                'shopId' => '4'
            ],

            /*PRODUCTOS DE AFEDE*/

            [
                'name' => 'EVOLUTION ROBOT',
                'description' => '    Kit para montar tu propio robot! Una vez montado el niño puede programarlo para que recoja objetos y los transporte en sus brazos
                Y gracias a la app, el niño podrá jugar en diferentes modalidades con el robot: Programación, Real Time, Auto-Aprendizaje, Baile y Memo
                Con sonidos, música, mensajes de voz y expresiones faciales, Evolution Robot se convertirá en el gran compañero de los niños',
                'stock' => '40',
                'price' => '55.95',
                'photo' => '25.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],
            [
                'name' => 'Figura Buzz Lightyear',
                'description' => '    El personaje favorito de los niños
                Modelo y colores como en la película
                Desarrolla la imaginación del niño',
                'stock' => '40',
                'price' => '39.99',
                'photo' => '26.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],

            [
                'name' => 'CITROEN DS 53 QATAR',
                'description' => 'Este producto es un coche de Scalextric en escala 1:32. El coche representa el modelo Citroen DS3 Quatar',
                'stock' => '40',
                'price' => '39.99',
                'photo' => '27.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],
            [
                'name' => 'DISFRAZ PINGÜINO NIÑO/A',
                'description' => '',
                'stock' => '40',
                'price' => '39.99',
                'photo' => '28.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],
            [
                'name' => 'DISFRAZ VAQUERO NIÑO',
                'description' => '',
                'stock' => '40',
                'price' => '14.99',
                'photo' => '29.jpg',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],

            [
                'name' => 'DISFRAZ VAQUERA NIÑA',
                'description' => '',
                'stock' => '40',
                'price' => '14.99',
                'photo' => '30.png',
                'link' => '',
                'language' => 'multi',
                'shopId' => '5'
            ],

            /*PRODUCTOS DE DOUGLAS*/

            [
                'name' => 'Bad Boy Eau De Toilette',
                'description' => 'Bad Boy Eau de Toilette personifica la dualidad masculina en un audaz símbolo de una nueva masculinidad. Fuerte pero sensible, heroico y al mismo tiempo vulnerable, el hombre BAD BOY está seguro de quién es. BAD BOY Eau de Toilette captura Las múltiples facetas de la virilidad contemporánea en un perfume moderno, explosivo y sofisticado.',
                'stock' => '40',
                'price' => '69.95',
                'photo' => '31.jpg',
                'link' => 'https://www.youtube.com/embed/VhFIAsqa85U',
                'language' => 'multi',
                'shopId' => '6'
            ],

            [
                'name' => 'Invictus Legend Eau De Parfum ',
                'description' => 'Esta nueva versión de Invictus conserva algunos de los rasgos característicos: la virilidad y la alianza frescor – sensualidad. Pero esta vez con un cambio de registro, Invictus Legend se rinde ante un frescor aromático repleto de contrastes especiados y ante unas intensas y ardientes notas amaderadas.',
                'stock' => '40',
                'price' => '72.95',
                'photo' => '32.jpg',
                'link' => 'https://www.youtube.com/embed/DZs46zpJ9zY',
                'language' => 'multi',
                'shopId' => '6'
            ],

            [
                'name' => 'Invictus Legend Eau De Parfum ',
                'description' => 'Humor, sensualidad, estilo gentleman. Paco Rabanne apuesta 1 millón al gran retorno de la seducción masculina. El oro, materia predilecta de Paco Rabanne, reaparece aquí en un frasco asombroso en forma de lingote de oro, numerado y labrado. Dandy con pinta de rufián, el modelo Matt Gordon es el icono de 1 Million. Difícil de catalogar, 1 Million es un perfume singular donde se combinan notas frescas, efluvios aromáticos y especiados, sensación de fruta jugosa, pero también notas de flores, de maderas cálidas y una impronta de cuero suave.',
                'stock' => '40',
                'price' => '66',
                'photo' => '33.jpg',
                'link' => 'https://www.youtube.com/embed/owx6CoiKUC4',
                'language' => 'multi',
                'shopId' => '6'
            ],

            [
                'name' => 'Good Girl Carolina Herrera Eau De Parfum',
                'description' => 'Good Girl es una fragancia sensual y sofisticada, que refleja la dualidad de la mujer. Esta innovadora fragancia captura la complejidad de la mujer con excepcionales ingredientes. Cada parte de la fragancia es un reflejo de la mujer Herrera. Una fragancia afrutada y amaderada, con un contraste de acordes que reflejan a la perfección el concepto de dualidad.',
                'stock' => '40',
                'price' => '60.95',
                'photo' => '34.jpg',
                'link' => 'https://www.youtube.com/embed/owx6CoiKUC4',
                'language' => 'multi',
                'shopId' => '6'
            ],
            [
                'name' => 'Kenzo World Power',
                'description' => 'Kenzo World Power, el nuevo Eau de Parfum, símbolo de la diversidad y la libertad. A través de un perfume femenino positivo con un carácter distinguido, Kenzo World Power te invita a escribir tus propias reglas. Lo que tú eres realmente hace tu fuerza, tu PODER: ¡muéstralo al mundo! El nuevo perfume Kenzo World Power se inspira en la moda Kenzo de Carol Lim y Humberto León y va dirigido a aquellas mujeres que les gusta ser quiénes son, perfectamente imperfectas. Con Kenzo World Power, muestra el poder que está en ti.El icónico ojo en color amarillo que representa la vitalidad, la energía y el positivismo de la generación millenial. El efecto espejo del packaging que muestra tú verdadero yo y la tapa transparente del frasco, que revela lo oculto. Kenzo World Power, el poder de ser tú mismo.',
                'stock' => '40',
                'price' => '58.95',
                'photo' => '35.jpg',
                'link' => 'https://www.youtube.com/embed/ABz2m0olmPg',
                'language' => 'multi',
                'shopId' => '6'
            ],
            [
                'name' => 'Olympea Legend Eau De Parfum',
                'description' => 'Olympéa Legend Eau de Parfum, presenta a una pareja singular, la vainilla – ciruela salada. Con sus facetas de albaricoque y violeta, esta jugosa ciruela cubierta de cristales de sal, densifican el poder adictivo de la vainilla. Un perfume, simplemente divino.',
                'stock' => '40',
                'price' => '39.95',
                'photo' => '36.jpg',
                'link' => 'https://www.youtube.com/embed/WxLgkmA-deA',
                'language' => 'multi',
                'shopId' => '6'
            ]

        ]);
}
}

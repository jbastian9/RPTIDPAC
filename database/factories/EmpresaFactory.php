<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'email' =>$this->faker->unique()->safeEmail,
            'logo'=>$this->faker->randomElement([
               'https://upload.wikimedia.org/wikipedia/commons/3/30/Amazona_aestiva_-upper_body-8a_%281%29.jpg',
               'https://img.freepik.com/foto-gratis/pez-betta-media-luna-nadando-superficie-negra_23-2148359827.jpg?size=338&ext=jpg',
               'https://img.freepik.com/foto-gratis/vista-superior-pequena-endrina-amarga-azul-negra-balde-hojas-sobre-fondo-gris-espacio-copia-jpg_141793-20509.jpg?size=626&ext=jpg',
               'https://img.freepik.com/foto-gratis/camion-recoger-dejar-paquetes_402113-4.jpg?size=626&ext=jpg',
               'https://img.freepik.com/foto-gratis/copas-vino-vino-tinto-manos-pareja-picnic_23-2148195876.jpg?size=338&ext=jpg',
               'https://img.freepik.com/foto-gratis/concepto-ventas-sobre-fondo-negro_23-2148313076.jpg?size=626&ext=jpg',
               'https://img.freepik.com/foto-gratis/noche-sala-juegos-renderizado-3d_402113-6.jpg?size=626&ext=jpg',
               'https://img.freepik.com/vector-gratis/fondo-caligrafico-aventura-fotografia_23-2148158581.jpg?size=338&ext=jpg',
               'https://img.freepik.com/foto-gratis/alta-vista-taza-te-hierbas_23-2148317001.jpg?size=626&ext=jpg',
               'https://img.freepik.com/foto-gratis/ensalada-pollo-parrilla-lechuga-tomate-queso-blanco-aceitunas-especias-vista-lateral-jpg_141793-3547.jpg?size=626&ext=jpg',
               ]),
            'sitio_web'=>$this->faker->randomElement([
                'https://www.twitch.tv/',
                'https://www.youtube.com/?gl=CO&hl=es-419',
            ]),
        ];
    }
}

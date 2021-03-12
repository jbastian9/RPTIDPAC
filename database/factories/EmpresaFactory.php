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
                'https://www.google.com/imgres?imgurl=http%3A%2F%2Fdemos.maugelves.com%2Fjpg-formats%2Fkitty-baseline.jpg&imgrefurl=https%3A%2F%2Fmaugelves.com%2Fcomo-optimizar-las-imagenes-jpg-con-el-formato-progresivo%2F&tbnid=t5gg7gUTLmm9DM&vet=12ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygBegUIARDSAQ..i&docid=_mH7qwzsh1-PeM&w=1280&h=853&q=imagenes%20jpg&ved=2ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygBegUIARDSAQ',
                'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.cleverfiles.com%2Fhowto%2Fwp-content%2Fuploads%2F2018%2F03%2Fminion.jpg&imgrefurl=https%3A%2F%2Fwww.cleverfiles.com%2Fhowto%2Fes%2Fwhat-is-jpg.html&tbnid=Z7v8NJDak3uZLM&vet=12ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygAegUIARDQAQ..i&docid=QFlun1GxrAfScM&w=630&h=354&q=imagenes%20jpg&ved=2ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygAegUIARDQAQ',
                'https://www.google.com/imgres?imgurl=http%3A%2F%2Fazdan.com.sa%2Fimages%2Fportfolio%2F115493.jpg&imgrefurl=http%3A%2F%2Fazdan.com.sa%2Fimages%2Fportfolio%2F&tbnid=eJqDBNvNofmAqM&vet=12ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygWegUIARD9AQ..i&docid=pWoSBYbCGecpSM&w=626&h=417&q=imagenes%20jpg&ved=2ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygWegUIARD9AQ',
                'https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F3%2F34%2FColores_vespertinos_atmosfera.jpg&imgrefurl=https%3A%2F%2Fes.wikipedia.org%2Fwiki%2FArchivo%3AColores_vespertinos_atmosfera.jpg&tbnid=Wh3QhF1-IJv2fM&vet=12ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMyg5egQIARBl..i&docid=SEuirwsICRXp-M&w=1300&h=1024&q=imagenes%20jpg&ved=2ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMyg5egQIARBl',
                'https://www.google.com/imgres?imgurl=http%3A%2F%2Fwww.vngmcytl.ac.in%2Fuploaded_files%2Fgallery%2FRio-2-Official-Trailer-3-40ovxu.jpg&imgrefurl=http%3A%2F%2Fwww.vngmcytl.ac.in%2Fuploaded_files%2Fgallery%2F%3FMD&tbnid=E55U0HxJwaD7pM&vet=12ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygwegUIARC6Ag..i&docid=-dW2m5XJ-r0hOM&w=1920&h=800&q=imagenes%20jpg&ved=2ahUKEwjA2tHFk6vvAhXbEt8KHRuEBbkQMygwegUIARC6Ag',
                'https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Ff0%2F1a%2F77%2Ff01a7747ff313829754516e972e3164a.jpg&imgrefurl=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F671106781942025348%2F&tbnid=EeZrvY4IikJ_EM&vet=12ahUKEwjsxMD7k6vvAhVvjOAKHTpvBQgQMygBegUIARCrAQ..i&docid=VD2xnCSnZnCmdM&w=1920&h=1080&q=epic%20images&ved=2ahUKEwjsxMD7k6vvAhVvjOAKHTpvBQgQMygBegUIARCrAQ',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQay29j4dnb5MuEzh5vMi5lowMyxHWMHz_J9g&usqp=CAU',
                'https://www.google.com/imgres?imgurl=https%3A%2F%2Fpbs.twimg.com%2Fmedia%2FErtHjXoW8AIYffA.jpg&imgrefurl=https%3A%2F%2Ftwitter.com%2Fepicgames%2Fstatus%2F1349751903534649345&tbnid=21hNiTS-Uorx5M&vet=12ahUKEwjsxMD7k6vvAhVvjOAKHTpvBQgQMyg7egQIARA_..i&docid=hSRxPi3yCjrS0M&w=1200&h=675&q=epic%20images&ved=2ahUKEwjsxMD7k6vvAhVvjOAKHTpvBQgQMyg7egQIARA_',
                'https://www.google.com/imgres?imgurl=https%3A%2F%2Facf.geeknetic.es%2Fimgri%2Fimagenes%2Fauto%2F2020%2F5%2F14%2Fw73-19051-epic-games-store-gta-v-regalo-muestra.jpg%3Ff%3Dwebp&imgrefurl=https%3A%2F%2Fwww.geeknetic.es%2FNoticia%2F19051%2FLos-servidores-de-Epic-Games-se-caen-ante-la-carga-que-les-ha-supuesto-regalar-GTA-V.html&tbnid=gFf17zDGonjmBM&vet=10CG4QMyiYAWoXChMIgOHFjZSr7wIVAAAAAB0AAAAAEAI..i&docid=Tl6cVHk7E3G5QM&w=829&h=553&q=epic%20images&ved=0CG4QMyiYAWoXChMIgOHFjZSr7wIVAAAAAB0AAAAAEAI',
            ]),
            'sitio_web'=>$this->faker->randomElement([
                'https://www.twitch.tv/',
                'https://www.youtube.com/?gl=CO&hl=es-419',
            ]),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'apellido'=> $this->faker->name,
            'email' =>$this->faker->unique()->safeEmail,
            'telefono' =>$this->faker->randomElement(['3254215062','3265410214']),
            'empresa_id' =>$this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        ];
    }
}

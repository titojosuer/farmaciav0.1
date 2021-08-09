<?php

namespace Database\Factories;

use App\Models\clientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'dni' => $this->faker->word,
        'direccion' => $this->faker->text,
        'telefono' => $this->faker->word,
        'email' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

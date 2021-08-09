<?php

namespace Database\Factories;

use App\Models\proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class proveedoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = proveedores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'direccion' => $this->faker->word,
        'telefono' => $this->faker->word,
        'email' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

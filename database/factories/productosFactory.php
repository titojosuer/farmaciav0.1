<?php

namespace Database\Factories;

use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class productosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'categoria' => $this->faker->word,
        'descripcion' => $this->faker->text,
        'proveedor' => $this->faker->word,
        'cantidad' => $this->faker->word,
        'precio' => $this->faker->word,
        'estado' => $this->faker->word,
        'fecha_expiracion' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

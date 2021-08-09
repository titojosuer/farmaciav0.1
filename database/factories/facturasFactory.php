<?php

namespace Database\Factories;

use App\Models\facturas;
use Illuminate\Database\Eloquent\Factories\Factory;

class facturasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = facturas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subtotal' => $this->faker->word,
        'isv' => $this->faker->word,
        'total' => $this->faker->word,
        'fecha' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

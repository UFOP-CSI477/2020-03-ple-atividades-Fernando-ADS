<?php

namespace Database\Factories;

use App\Models\Maquina;
use App\Models\Fornecedor;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaquinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maquina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nome' => $this->faker->company,
          'marca' => $this->faker->departmentName,
          'fornecedor_id' => Fornecedor::factory(),
          'valor' => $this->faker->randomFloat
        ];
    }
}

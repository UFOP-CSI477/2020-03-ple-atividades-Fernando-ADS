<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
  /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
  protected $model = Cliente::class;

  /**
  * Define the model's default state.
  *
  * @return array
  */
  public function definition()
  {
    return [
      'cnpj' => $this->faker->ean8,
      'nome' => $this->faker->name,
      'telefone' => $this->faker->phoneNumber,
      'email' => $this->faker->email,
      'endereco' => $this->faker->streetName

    ];
  }
}

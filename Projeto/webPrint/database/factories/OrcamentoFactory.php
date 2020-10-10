<?php

namespace Database\Factories;

use App\Models\Orcamento;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrcamentoFactory extends Factory
{
  /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
  protected $model = Orcamento::class;

  /**
  * Define the model's default state.
  *
  * @return array
  */
  public function definition()
  {
    return [
      'status' => $this->faker->word,
      'cliente_id' => Cliente::factory(),
      'funcionario_id' => Funcionario::factory(),
      'produto_id' => Produto::factory(),
      'quantidade' => $this->faker->randomDigit,
      'valortotal' => $this->faker->randomFloat,


    ];
  }
}

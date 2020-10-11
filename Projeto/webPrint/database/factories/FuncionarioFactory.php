<?php

namespace Database\Factories;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

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
          'tipo' => $this->faker->randomDigit,
          'telefone' => $this->faker->phoneNumber,
          'email' => $this->faker->unique()->safeEmail,
          'email_verified_at' => now(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'endereco' => $this->faker->streetName,
          //'remember_token' => Str::random(10),
        ];
    }
}

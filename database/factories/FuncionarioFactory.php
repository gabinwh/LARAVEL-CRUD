<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'sobrenome' => $this->faker->name(),
            'empresa_id'=>Empresa::inRandomOrder()->first()->id,
            'email' => $this->faker->unique()->safeEmail(),
            'telefone' =>$this->faker-> phoneNumber(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->words(3, true),
            'email' => $this->faker->unique()->safeEmail,
            'sexo' => 'F',
            'data_nascimento' => $this->faker->date()
        ];
    }
}

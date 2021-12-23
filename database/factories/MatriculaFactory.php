<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ['aluno_id', 'curso_id']
            'aluno_id' => null,
            'curso_id' => null,
        ];
    }
}

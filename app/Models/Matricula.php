<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id', 'curso_id'];

    public function curso()
    {
        return $this->hasMany(Cursos::class); // curso_id
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
    }
}

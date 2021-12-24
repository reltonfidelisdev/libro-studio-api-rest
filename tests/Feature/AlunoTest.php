<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlunoTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_rota_get_alunos()
    {
        $response = $this->get('/api/alunos');
        $response->assertStatus(200);
    }

    public function test_rota_get_relatorio_alunos_cursos()
    {
        $response = $this->get('/relatorio-alunos-cursos');
        $response->assertStatus(200);
    }

    public function test_rota_get_buscar_aluno_nome_email()
    {
        $response = $this->get('/buscar-aluno-nome-email/{NomeOuEmail}');
        $response->assertStatus(200);
    }
}

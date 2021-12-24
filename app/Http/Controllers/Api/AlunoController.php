<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{

    private $aluno;

    public function __construct(Aluno $aluno)
    {
        $this->aluno = $aluno;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->aluno->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->aluno->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return $aluno;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Aluno $aluno)
    {
          $aluno->update($request->all());
        return $aluno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        return $aluno->delete($aluno->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function buscarAlunoPorNomeOuEmail($nomeOuEmail)
    {
        return Aluno::where('email', '=', $nomeOuEmail)
                    ->orWhere('nome', 'like', '%'.$nomeOuEmail.'%')
                        ->get();
    }

    // Uma requisição que informe o total de alunos por
    // faixa etária
    public function totalAlunos(){
        $alunos = DB::select('SELECT
                                TIMESTAMPDIFF(YEAR,a.data_nascimento, now()) as idade,
                                a.nome, a.sexo, c.titulo as curso, c.id as id_curso, a.id as id_aluno from alunos as a
                                inner join matriculas as m on (m.aluno_id = a.id)
                                inner join cursos as c on (c.id = m.curso_id)
                                order by(c.id and a.sexo)
                                ');
        $alunosOrdenados = [];
        $cont1=0; $cont2=0; $cont3=0; $cont4=0; $cont5=0;

        foreach($alunos as $key => $value){

            // ○ Menor que 15 anos
            if ($value->idade <= 15) {
                $alunosOrdenados['0A15_ANOS'][$cont1++] = $value;
                $alunosOrdenados['TOTAL_DE_ALUNOS_A_BAIXO_DE_15'] = $cont1;
            }

            // ○ Entre 15 e 18 anos
            if ($value->idade >= 15 && $value->idade <= 18) {
                $alunosOrdenados['15A18_ANOS'][$cont2++] = $value;
                $alunosOrdenados['TOTAL_DE_ALUNOS_ENTE_15_E_18'] = $cont2;
            }

            // ○ Entre 19 e 24 anos
            if ($value->idade >= 19 && $value->idade <= 24) {
                $alunosOrdenados['19A24_ANOS'][$cont3++] = $value;
                $alunosOrdenados['TOTAL_DE_ALUNOS_ENTE_19_E_24'] = $cont3;
            }

            // ○ Entre 25 e 30 anos
            if ($value->idade >= 25 && $value->idade <= 30) {
                $alunosOrdenados['25A30_ANOS'][$cont4++] = $value;
                $alunosOrdenados['TOTAL_DE_ALUNOS_ENTE_25_E_30'] = $cont4;
            }

            // ○ Maior que 30 anos
            if ($value->idade >= 31) {
                $alunosOrdenados['30_ANOS_OU_MAIS'][$cont5++] = $value;
                $alunosOrdenados['TOTAL_DE_ALUNOS_ACIMA_DE_30'] = $cont5;
            }


        }
        return $alunosOrdenados;

    }
    // separados por curso
    // e sexo



}

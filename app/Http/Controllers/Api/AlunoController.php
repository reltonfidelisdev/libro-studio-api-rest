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
}

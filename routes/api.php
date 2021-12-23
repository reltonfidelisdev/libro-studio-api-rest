<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    // cursos // alunos // matriculas

Route::apiResource('cursos', \App\Http\Controllers\Api\CursoController::class);
Route::apiResource('alunos', \App\Http\Controllers\Api\AlunoController::class);
Route::apiResource('matriculas', \App\Http\Controllers\Api\MatriculaController::class);

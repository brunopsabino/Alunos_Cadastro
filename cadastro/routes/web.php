<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

//Rotas para a entidade curso
Route::get('/cursos', 'CursoController@lista');

Route::get('/cursos/editar/{id}', 'CursoController@edita_curso')->where('id', '[0-9]+');
Route::get('/cursos/editado/{id}', 'CursoController@edita')->where('id', '[0-9]+');

Route::get('/cursos/deletar/{id}', 'CursoController@deleta_curso')->where('id', '[0-9]+');
Route::get('/cursos/deletado/{id}', 'CursoController@deleta')->where('id', '[0-9]+');

Route::get('/cursos/adicionar', 'CursoController@adiciona_curso');
Route::get('/cursos/adicionado', 'CursoController@adiciona');


//Rotas para entidade aluno
Route::get('/alunos', 'AlunoController@lista');

Route::get('/alunos/adicionar', 'AlunoController@adiciona_aluno');
Route::get('/alunos/adicionado', 'AlunoController@adiciona');

Route::get('/alunos/deletar/{id}', 'AlunoController@deleta_aluno')->where('id', '[0-9]+');
Route::get('/alunos/deletado/{id}', 'AlunoController@deleta')->where('id', '[0-9]+');

Route::get('/alunos/editar/{id}', 'AlunoController@edita_aluno')->where('id', '[0-9]+');
Route::get('/alunos/editado/{id}', 'AlunoController@edita')->where('id', '[0-9]+');

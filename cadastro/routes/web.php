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
    return view('welcome');
});

//Rotas para a entidade curso
Route::get('/cursos', 'CursoController@lista');

Route::get('/cursos/editar/{id}', 'CursoController@edita_curso')->where('id', '[0-9]+');
Route::get('/cursos/editado/{id}', 'CursoController@edita')->where('id', '[0-9]+');

Route::get('/cursos/deletar/{id}', 'CursoController@deleta_curso')->where('id', '[0-9]+');
Route::get('/cursos/deletado/{id}', 'CursoController@deleta')->where('id', '[0-9]+');

Route::get('/cursos/adicionar', 'CursoController@adiciona_curso');
Route::get('/cursos/adicionado', 'CursoController@adiciona');

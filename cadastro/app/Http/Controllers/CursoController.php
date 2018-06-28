<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Curso;
use Request;

class CursoController extends Controller {
    
    public function lista(){
        $cursos = Curso::all();
        return view('lista_curso')->with('cursos', $cursos);
    }

    public function edita_curso($id){
        //$id = Request::route('id');
        $resposta = DB::select('select * from curso where curso_id = ?',[$id]);
            if(empty($resposta)){
                return 'Curso não existe!';
            }
            return view('edita_curso')->with('c', $resposta[0]);
   }

   public function edita($id){
    
    $cod_curso = Request::input('cod_curso');
    $nome_curso = Request::input('nome_curso');
    $instituicao_ensino = Request::input('instituicao_ensino');

    if(empty($cod_curso) || empty($nome_curso) || empty($instituicao_ensino)){
        return view('curso_editado_erro');
    }
        
        $sql = 'update curso set cod_curso = ?, nome_curso = ?, instituicao_ensino = ? where curso_id ='.$id;
        DB::update($sql, array($cod_curso, $nome_curso, $instituicao_ensino));
        
        return view('curso_editado');
   }

   public function deleta_curso($id){
        $resposta = DB::select('select * from curso where curso_id = ?',[$id]);
        if(empty($resposta)){
            return 'Curso não existe!';
        }
        return view('deleta_curso')->with('p', $resposta[0]);
   }

   public function deleta($id){

        //Checa se existem alunos adicionados ao curso antes de excluir
        $check_curso = DB::table('aluno')->where('curso', $id)->count();
            if($check_curso > 0){
                return view('curso_deletado_erro');
            }

        DB::delete('delete from curso where curso_id = ?',[$id]);
        return view('curso_deletado');
    }

   public function adiciona_curso(){
        return view('adicionar_curso');
   }

   public function adiciona(){

    $cod_curso = Request::input('cod_curso');
    $nome_curso = Request::input('nome_curso');
    $instituicao_ensino = Request::input('instituicao_ensino');

    DB::insert('insert into curso
    (cod_curso, nome_curso, instituicao_ensino) values (?,?,?)',
    array($cod_curso, $nome_curso, $instituicao_ensino));
    
    return view('curso_adicionado');
   }
}

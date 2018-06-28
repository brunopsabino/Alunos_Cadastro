<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Aluno;
use Request;


class AlunoController extends Controller {

    public function lista(){
        $alunos = Aluno::all();
        return view('lista_aluno')->with('alunos', $alunos);
    }

    public function adiciona_aluno(){
        return view('adicionar_aluno');
    }

    public function adiciona(){

        $nome_aluno = Request::input('nome_aluno');
        $curso = Request::input('curso');
        $numero_matricula = Request::input('numero_matricula');
        $semestre = Request::input('semestre');
        $status_aluno = Request::input('status_aluno');

        
        $check_curso = DB::table('curso')->where('curso_id', $curso)->count();
            if($check_curso == 0){
                return view('aluno_adicionado_erro');
            }
        
        DB::insert('insert into aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno) values (?,?,?,?,?)',
        array($nome_aluno, $curso, $numero_matricula, $semestre, $status_aluno));
        
        return view('aluno_adicionado');
    }

    public function deleta_aluno($id){
        $resposta = DB::select('select * from aluno where aluno_id = ?',[$id]);
        if(empty($resposta)){
            return 'Aluno não existe!';
        }
        return view('deleta_aluno')->with('a', $resposta[0]);
    }

   public function deleta($id){
        DB::delete('delete from aluno where aluno_id = ?',[$id]);
        return view('aluno_deletado');
    }

    public function edita_aluno($id){
        $resposta = DB::select('select * from aluno where aluno_id = ?',[$id]);
            if(empty($resposta)){
                return 'Aluno não existe!';
            }
            return view('edita_aluno')->with('a', $resposta[0]);
   }

   public function edita($id){
    
    $nome_aluno = Request::input('nome_aluno');
    $curso = Request::input('curso');
    $numero_matricula = Request::input('numero_matricula');
    $semestre = Request::input('semestre');
    $status_aluno = Request::input('status_aluno');

    if(empty($nome_aluno) || empty($curso) || empty($numero_matricula) || empty($semestre) || empty($status_aluno)){
        return view('aluno_editado_erro');
    }
        
        $sql = 'update aluno set nome_aluno = ?, curso = ?, numero_matricula = ?, semestre = ?, status_aluno = ? where aluno_id ='.$id;
        DB::update($sql, array($nome_aluno, $curso, $numero_matricula, $semestre, $status_aluno));
        
        return view('aluno_editado');
   }

}
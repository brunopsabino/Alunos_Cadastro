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

}
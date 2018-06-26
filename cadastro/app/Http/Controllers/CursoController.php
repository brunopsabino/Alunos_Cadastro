<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CursoController extends Controller {
    
    public function lista(){
    
        $html = '<h1>Listagem de cursos com Laravel</h1>';
        $html .= '<ul>';

        $cursos = DB::select('select * from curso');

        foreach ($cursos as $c) {
            $html .= '<li> Curso: '. $c->nome_curso .',
            Instituição: '. $c->instituicao_ensino .'</li>';
        }

        $html .= '</ul>';
        return $html;
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
 
    public function run()
    {
        DB::insert('INSERT INTO curso
        (cod_curso, nome_curso, instituicao_ensino)
        VALUES (?,?,?)',
        array('01', 'COMPUTAÇÃO', 'UFC'));

        DB::insert('INSERT INTO curso
        (cod_curso, nome_curso, instituicao_ensino)
        VALUES (?,?,?)',
        array('02', 'ENGENHARIA CIVIL', 'UNIFOR'));

        DB::insert('INSERT INTO curso
        (cod_curso, nome_curso, instituicao_ensino)
        VALUES (?,?,?)',
        array('03', 'DIREITO', 'UNI7'));

        DB::insert('INSERT INTO curso
        (cod_curso, nome_curso, instituicao_ensino)
        VALUES (?,?,?)',
        array('04', 'MEDICINA', 'UECE'));
    }
}
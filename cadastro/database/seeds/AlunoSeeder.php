<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
 
    public function run()
    {
        DB::insert('INSERT INTO aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno)
        VALUES (?,?,?,?,?)',
        array('Bruno Sabino', 4, 23782, 4, 1));

        
    }
}
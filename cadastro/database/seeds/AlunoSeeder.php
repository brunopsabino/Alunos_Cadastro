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

        DB::insert('INSERT INTO aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno)
        VALUES (?,?,?,?,?)',
        array('Jose Pereira', 2, 1234, 2, 2));

        DB::insert('INSERT INTO aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno)
        VALUES (?,?,?,?,?)',
        array('Maria Gadelha', 1, 38948, 7, 3));

        DB::insert('INSERT INTO aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno)
        VALUES (?,?,?,?,?)',
        array('Gabriel Pinheiro', 3, 45275, 6, 1));

        DB::insert('INSERT INTO aluno
        (nome_aluno, curso, numero_matricula, semestre, status_aluno)
        VALUES (?,?,?,?,?)',
        array('Fernanda Silva', 1, 13452, 7, 1));

        
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('aluno_id');
            $table->string('nome_aluno');
            $table->unsignedInteger('curso');
                $table->foreign('curso')->references('curso_id')->on('curso');
            $table->integer('numero_matricula');
            $table->integer('semestre');
            $table->enum('status_aluno', ['Matriculado', 'Trancado', 'Jubilado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}

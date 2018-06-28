<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Editar Aluno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Editar Aluno</h1>
                    <p class="lead">Edita um aluno já cadastrado no Banco de Dados.</p>
                </div>
            </div>
        </div>
        
        <br>
        <div class="container" align="center">
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="row">
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <table>
                            <tr>
                                <td><strong>Aluno:</strong></td>
                                <td><?= $a->nome_aluno ?></td>
                            </tr>
                            <tr>
                                <td><strong>Curso:</strong></td> 
                                <td><?= $a->curso ?></td>
                            </tr>
                            <tr>
                                <td><strong>Matrícula:</strong></td>
                                <td><?= $a->numero_matricula ?></td>
                            </tr>
                            <tr>
                                <td><strong>Semestre:</strong></td>
                                <td><?= $a->semestre ?></td>
                            </tr>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td><?= $a->status_aluno ?></td>
                            </tr>
                        </table>   
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <form action="/alunos/editado/<?= $a->aluno_id ?>">
                            <div class="form-group">
                                <label for="cod_curso">Nome do Aluno</label>
                                <input type="text" class="form-control" name="nome_aluno" id="nome_aluno" value="<?= $a->nome_aluno ?>">
                            </div>
                            <div class="form-group">
                                <label for="curso">Curso</label>
                                <input type="text" class="form-control" name="curso" id="curso" value="<?= $a->curso ?>">
                            </div>
                            <div class="form-group">
                                <label for="numero_matricula">Matrícula</label>
                                <input type="text" class="form-control" name="numero_matricula" id="numero_matricula" value="<?= $a->numero_matricula ?>">
                            </div>
                            <div class="form-group">
                                <label for="semestre">Semestre</label>
                                <select class="custom-select" name="semestre" id="semestre">
                                    <option value="1">1º</option>
                                    <option value="2">2º</option>
                                    <option value="3">3º</option>
                                    <option value="4">4º</option>
                                    <option value="5">5º</option>
                                    <option value="6">6º</option>
                                    <option value="7">7º</option>
                                    <option value="8">8º</option>
                                    <option value="9">9º</option>
                                    <option value="10">10º</option>
                                    <option value="11">11º</option>
                                    <option value="12">12º</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="semestre">Status</label>
                                <select class="custom-select" name="status_aluno" id="status_aluno">
                                    <option value="1">Matriculado</option>
                                    <option value="2">Trancado</option>
                                    <option value="3">Jubilado</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Alterar Aluno</button>
                        </form>
                    </div>
               </div>
            </div>
        </div>
        

        <div class="container" align="left">
            <a href="/alunos">
                <button type="button" class="btn btn-primary btn-sm">Voltar</button>    
            </a>
        </div>
        
    </body>
</html>
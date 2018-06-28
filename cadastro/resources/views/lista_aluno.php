<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Listagem de Alunos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Listagem de Alunos</h1>
                    <p class="lead">Mostra todos os alunos que estão cadastrados no Banco de Dados.</p>
                </div>
            </div>
        </div>

        <div class="container" align="center">
            <a href="/cursos/adicionar">
                <button type="button" class="btn btn-primary btn-sm">Adicionar novo Aluno</button>
            </a>
        </div>
        <br>
        <div class="container" align="center">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="row">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Semestre</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alunos as $a): ?>
                                <tr>
                                    <td><?= $a->nome_aluno ?></td>
                                    <td><?= $a->curso ?></td>
                                    <td><?= $a->numero_matricula ?></td>
                                    <td><?= $a->semestre ?></td>
                                    <td><?= $a->status_aluno ?></td>
                                    <td>
                                        <a href="/cursos/editar/<?= $a->aluno_id ?>">
                                            <button type="button" class="btn btn-primary btn-sm">Alterar</button>    
                                        </a>
                                        <a href="/cursos/deletar/<?= $a->aluno_id ?>">
                                            <button type="button" class="btn btn-danger btn-sm">Deletar</button>    
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
        

        <div class="container" align="center">
            <a href="/">
                <button type="button" class="btn btn-primary">Voltar</button>
            </a>
        </div>
        
    </body>
</html>
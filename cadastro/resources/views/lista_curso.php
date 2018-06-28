<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Listagem de Cursos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Listagem de Cursos</h1>
                    <p class="lead">Mostra todos os cursos que estão cadastrados no Banco de Dados.</p>
                </div>
            </div>
        </div>

        <div class="container" align="center">
            <a href="/cursos/adicionar">
                <button type="button" class="btn btn-primary btn-sm">Adicionar novo Curso</button>
            </a>
        </div>
        <br>
        <div class="container" align="center">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="row">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Código do Curso</th>
                                <th scope="col">Nome do Curso</th>
                                <th scope="col">Instituição de Ensino</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cursos as $c): ?>
                                <tr>
                                    <td><?= $c->cod_curso ?></td>
                                    <td><?= $c->nome_curso ?></td>
                                    <td><?= $c->instituicao_ensino ?></td>
                                    <td>
                                        <a href="/cursos/editar/<?= $c->curso_id ?>">
                                            <button type="button" class="btn btn-primary btn-sm">Alterar</button>    
                                        </a>
                                        <a href="/cursos/deletar/<?= $c->curso_id ?>">
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
            <button type="button" class="btn btn-primary">Voltar</button>
        </div>
        
    </body>
</html>
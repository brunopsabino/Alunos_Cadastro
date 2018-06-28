<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Editar Curso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Editar Curso</h1>
                    <p class="lead">Edita um curso já cadastrado no Banco de Dados.</p>
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
                                <td><strong>Cód:</strong></td>
                                <td><?= $c->cod_curso ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nome:</strong></td> 
                                <td><?= $c->nome_curso ?></td>
                            </tr>
                            <tr>
                                <td><strong>Instituição:</strong></td>
                                <td><?= $c->instituicao_ensino ?></td>
                            </tr>
                        </table>   
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <form action="/cursos/editado/<?= $c->curso_id ?>">
                            <div class="form-group">
                                <label for="cod_curso">Código do Curso</label>
                                <input type="text" class="form-control form-control-sm" name="cod_curso" id="cod_curso" value="<?= $c->cod_curso ?>">
                            </div>
                            <div class="form-group">
                                <label for="nome_curso">Nome do Curso</label>
                                <input type="text" class="form-control form-control-sm" name="nome_curso" id="nome_curso" value="<?= $c->nome_curso ?>">
                            </div>
                            <div class="form-group">
                                <label for="instituicao_ensino">Instituição de Ensino</label>
                                <input type="text" class="form-control form-control-sm" name="instituicao_ensino" id="instituicao_ensino" value="<?= $c->instituicao_ensino ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Alterar Curso</button>
                        </form>
                    </div>
               </div>
            </div>
        </div>
        

        <div class="container" align="left">
            <a href="/cursos">
                <button type="button" class="btn btn-primary btn-sm">Voltar</button>    
            </a>
        </div>
        
    </body>
</html>
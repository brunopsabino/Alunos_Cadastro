<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Adicionar Curso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Adicionar Curso</h1>
                    <p class="lead">Adiciona um novo Curso ao Banco de Dados.</p>
                </div>
            </div>
        </div>
                
        <div class="container" align="center">
            <div class="col-sm-6 col-lg-6 col-md-6">
                <form action="/cursos/adicionado">
                    <div class="form-group">
                        <label for="cod_curso">Código do Curso</label>
                        <input type="text" class="form-control" name="cod_curso" id="cod_curso" placeholder="Código do Curso" required>
                    </div>
                    <div class="form-group">
                        <label for="nome_curso">Nome do Curso</label>
                        <input type="text" class="form-control" name="nome_curso" id="nome_curso" placeholder="Nome do Curso" required>
                    </div>
                    <div class="form-group">
                        <label for="instituicao_ensino">Instituição de Ensino</label>
                        <input type="text" class="form-control" name="instituicao_ensino" id="instituicao_ensino" placeholder="Instituição de Ensino" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Adicionar Curso</button>
                </form>
            </div>
        </div>
        
        <div class="container" align="right">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="/cursos">
                    <button type="button" class="btn btn-primary">Voltar</button>   
                </a>   
            </div>
        </div>
    </body>
</html>
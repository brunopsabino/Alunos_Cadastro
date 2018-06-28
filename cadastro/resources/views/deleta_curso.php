<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Excluir Curso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Excluir Curso</h1>
                    <p class="lead">Exclui um curso cadastrado dno Banco de Dados.</p>
                </div>
            </div>
        </div>
        
        <div class="container" align="center">
            <h3>Tem certeza que deseja excluir o curso: <?= $p->nome_curso ?> ? </h3>
        </div>
        
        <div class="container" align="center">
            <div class="col-sm-12 col-lg-12 col-md-12">   
                <a href="/cursos">
                   <button type="button" class="btn btn-primary btn-sm">Não</button>    
                </a>
                <a href="/cursos/deletado/<?= $p->curso_id ?>">
                   <button type="button" class="btn btn-danger btn-sm">Sim</button>    
                </a>          
            </div>  
        </div>
        
    </body>
</html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Adicionar Aluno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron jumbotron-fluid" align="center">
                <div class="container">
                    <h1 class="display-4">Adicionar Aluno</h1>
                    <p class="lead">Adiciona um novo Aluno ao Banco de Dados.</p>
                </div>
            </div>
        </div>
                
        <div class="container" align="center">
            <div class="col-sm-6 col-lg-6 col-md-6">
                <form action="/alunos/adicionado">
                    <div class="form-group">
                        <label for="cod_curso">Nome do Aluno</label>
                        <input type="text" class="form-control" name="nome_aluno" id="nome_aluno" placeholder="Nome do Aluno" required>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <input type="text" class="form-control" name="curso" id="curso" placeholder="Curso" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_matricula">Matrícula</label>
                        <input type="text" class="form-control" name="numero_matricula" id="numero_matricula" placeholder="Número de Matrícula" required>
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

                    <button type="submit" class="btn btn-primary">Adicionar Aluno</button>
                </form>
            </div>
        </div>
        
        <div class="container" align="right">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <a href="/alunos">
                    <button type="button" class="btn btn-primary">Voltar</button>   
                </a>   
            </div>
        </div>
    </body>
</html>
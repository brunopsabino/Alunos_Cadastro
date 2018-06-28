# Tecnologias Utilizadas
- Framework Laravel 5.6
- MySQL
- PHP 7.2.6
- Composer 1.6.5
- BootStrap 4
- Git

# Instruções
 ### Realizar clone do projeto Git: 
-- https://github.com/brunopsabino/Alunos_Cadastro.git

### Criar Banco de Dados MySQL local
- usuario: root
- senha: 

### Criar schema cadastro_alunos_laravel
- CREATE SCHEMA `cadastro_alunos_laravel`;

### Realizar Criação das tabelas com o Migrate:
- php artisan migrate

### Popular tabelas do Banco de Dados com o Seeds
- php artisan db:seed

### Subir aplicação
- php artisan serve

### Acessar aplicação
- http://localhost:8000/
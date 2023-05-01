<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre 
- Este é um simples projeto CRUD (Create, Read, Update e Delete), onde o foco é um TODO, um tipo de "lista de tarefas". Primeiramente, o usuário precisa se logar, se já possuir conta, se não, precisa criar uma conta e se logar logo em seguida. Logo depois de logado, o software redirecionará o usuário para a tela principal, a qual possui apenas um "input", onde será digita a tarefa e logo em seguida ela inserida na lista de tarefas. As funções possíveis ao se fazer após inserir uma tarefa, é marcá-la como realizada no checkbox do lado esquerdo, editar a tarefa e/ou deletar a mesma. Na parte inferior há duas abas, onde é possível ver separadamente as atividades ativas e que ainda precisam ser realizadas. 

- Neste projeto utilizei as seguintes ferramentas: 
    - Laravel
    - PHP
    - Ajax
    - Postgres
    - Jquery UI
    - Javascript
    - Bootstrap
    - CSS
    - HTML

## Acesso Local

- Para acessar o projeto localmente: 
    1. Clonar o projeto através do git.
        1. Executar o seguinte comando no terminal no diretório de preferência: git clone https://github.com/chrystianruan/todos-esig.git 
    1. Criar um banco de dados Postgres através de linha de comando no terminal, ou em um gerenciador de banco de dados Postgres (sugestão: pgAdmin4)
    1. Alterar o arquivo .env.example para .env
    1. Alterar as variáveis do banco de dados no arquivo .env, como solicitado a seguir:
        - DB_CONNECTION=pgsql
        - DB_HOST=[ HOST_DO_BD] (normalmente é: 127.0.0.1)
        - DB_PORT=[ PORTA_DO_BD] (normalmente é: 5432)
        - DB_DATABASE=[ NOME_DO_BD ]
        - DB_USERNAME=[ USERNAME_DO_BD] (normalmente é: "postgres")
        - DB_PASSWORD=[ SENHA_DO_BD]
    1. Executar comando ```php artisan migrate``` para rodar as migrations no banco de dados.
    1. Executar comando ```php artisan serve``` no terminal do diretório do projeto.
    1. Acessar o link fornecido (geralmente é: http://127.0.0.1:8000) em um navegador de sua preferência.

## Acesso remoto

    1. Acesse o link: https://todos-esig-production.up.railway.app
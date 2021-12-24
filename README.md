# Plataforma de Ensino Online


### Cenário fictício
A Libro Studio deseja lançar uma nova plataforma de ensino online, onde desejamos
realizar a matrícula de alunos em cursos, através de um painel administrativo.

## Como iniciar o projeto
Após fazer o clono do repositório para a sua máquina ou para seu servidor web, siga as instruções abaixo para criar a estrutura do banco de dados.

### Crie o banco de dados libro_studio_api
use sua ferramenta de preferida para acessar o mysql e crie um banco de dados com o nome de 
libro_studio_api
Se usar o terminal e digitar: mysql -u root -p
Digitar a senha quando for solicitado
Em seguida execute o seguinte comando


```shell
create database  `libro_studio_api`;
```

Precisamos executar as migrations para criar a estrutura das tabelas no banco de dados.
No terminal, dentro da pasta do projeto, execute o seguinte comando:
```shell
php artisan migrate
```

Este software representa a API backend do sistema de gestão de matrícula dos alunos em cursos, dessa forma, temos como entidades relacionais do banco de daods alunos, cursos e matrículas.

#### Os endpoints da API estrão de acordo com o conceito de API's Rest e respondem de acordo com o verbo http utilizado pelo cliente.
### Todas as respostas são enviadas no formato JSON.
###### Para os alunos temos os seguintes endpoints:
```shell
GET /api/alunos/ [Retorna todos os alunos cadastrados no sistema]
```

```shell
GET /relatorio-alunos-cursos/ [Retorna um lista com os alunos matriculados, os cursos em que estão matriculados 
separadospor idade menor que 15 anos,entre 15 e 18 anos, entre 19 e 24 anos, entre 25 e 30 anos e maior que 30 anos]
```

```shell
POST /api/alunos/ [Cadastra um aluno no sistema]
```
```shell
PUT|PATCH /api/alunos/ [Atualiza um aluno no sistema]
```
```shell
DELETE /api/alunos/ [Deleta um aluno no sistema]
```
###### Para os cursos temos os seguintes endpoints:
```shell
GET /api/cursos/ [Retorna todos os cursos cadastrados no sistema]
```

```shell
POST /api/cursos/ [Cadastra um curso no sistema]
```
```shell
PUT|PATCH /api/cursos/ [Atualiza um curso no sistema]
```
```shell
DELETE /api/cursos/ [Deleta um aluno no sistema]
```

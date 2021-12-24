# Plataforma de Ensino Online


### Cenário fictício
A Libro Studio deseja lançar uma nova plataforma de ensino online, onde desejamos
realizar a matrícula de alunos em cursos, através de um painel administrativo.

## Instalando as dependências do projeto
Antes de tudo, precisamos instalar outros programas que fazem parte do projeto mas não são armazenados no GitHub.
Neste passo, você deve ter o composer instalado na sua máquina. Caso você não tenha, visite o site oficial e faça a instalação.
<br />
O site é esse aqui: https://getcomposer.org/
<br />
Tendo o composer funcionando, basta acessar a pasta do projeto em um terminal e rodar o segunte comando:
```shell
composer install
```

## Configurando o banco de daos
Após fazer o clone do repositório para a sua máquina ou para seu servidor web, siga as instruções abaixo para criar a estrutura do banco de dados.

### Crie o banco de dados libro_studio_api
Use sua ferramenta de preferida para acessar o mysql e crie um banco de dados com o nome de 
libro_studio_api
Se usar o terminal e digitar: mysql -u root -p
Digitar a senha quando for solicitado
Em seguida execute o seguinte comando

```shell
create database  `libro_studio_api`;
```
Assumindo que você usará o MySQL com Banco de dados, o próximo passo é informar ao laravel quais as credenciais do banco de dados, para isso, 
###### abra o arquivo .env.example na raíz do projeto e altere as seguintes linhas:

DB_DATABASE=libro_studio_api <br />
DB_USERNAME=coloque_o_usuario_do_banco <br />
DB_PASSWORD=cloque_a_senha_do_seu_banco <br />

###### Agora salve esse arquivos com o nome .env

Precisamos executar as migrations para criar a estrutura das tabelas no banco de dados.
No terminal, dentro da pasta do projeto, execute o seguinte comando:
```shell
php artisan migrate
```

Este software representa a API backend do sistema de gestão de matrícula dos alunos em cursos, dessa forma, temos como entidades relacionais do banco de daods alunos, cursos e matrículas.

#### Os endpoints da API estão de acordo com o conceito de API's Rest e respondem de acordo com o verbo http utilizado pelo cliente.
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
###### Para as matrículas temos os seguintes endpoints:
```shell
GET /api/matriculas/ [Retorna todo os alunos matruculados sistema]
```

```shell
POST /api/matriculas/ [Realiza a matrícula de um aluno em um curso]
```
```shell
PUT|PATCH /api/matriculas/ [Atualiza a matrícula de um aluno em um curso]
```
```shell
DELETE /api/matriculas/ [Deleta a matrícula de um aluno em um curso]
```
#### Se você quiser, pode ver todos os endpoints do projeto direto no seu prompt/shell
Para isso, acesse a pasta do projeto em um termal e em seguida rode o comando
```shell
php artisan route:list
```

### Esta é uma api bem simples, conforme foi pedido e eu tentei ao máximo entregar o aque foi proposto, mantendo um código limpo, de fácil entendimento, manutenção e evolução.
Como foi um teste pra ser entrege muito rápido, não tive tempo de fazer outras coisas, como validação nem muita cobertura com testes unitários. Por isso, alguma parte pode não funcionar conforme o esperedo.
..
Caso encontre alguma dificuldade pra rodar o projeto, pode me chamar que eu dou um help. Meu linkedin é: https://www.linkedin.com/in/reltonfidelis/

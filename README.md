<h1 align="center"> Estude Libras 2.0 </h1>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
<img src="http://img.shields.io/static/v1?label=STATUS&message=COMPLETO&color=GREEN&style=for-the-badge"/>
</p>

## Descrição do projeto
Este projeto é uma plataforma de curso de libras online, no qual tem o objetivo de democrativar o acesso a língua de sinais aos indivíduos. 

## :hammer: Funcionalidades do projeto

**Professor**
- **``Gerenciamento da plataforma:``** 
    O professor tem total autonomia para criar, editar e excluir os módulos, cursos, questionários e usuários cadastrados na plataforma.
- **``Painel de acompanhamento geral:``** 
    O professor consegue enxergar os dados gerais da plataforma.
- **``Dados específicos dos alunos:``** 
    Interface dos usuários cadastrados e seus rendimentos individuais 

**Aluno**
- Inscrição nos módulos
- Exibição dos módulos cadastrados e concluídos
- Comentários em cada curso
- Quiz
- Painel com resumos das atividades desenvolvidas
- Emissão de certificado dos cursos
- Alterar dados do perfil do usuário

## ✔️ Técnicas e tecnologias utilizadas

- ``Laravel 9``
- ``Tailwind CSS``
- ``Alpine.js``
- ``Mysql``
- ``Versionamento no Git``


## 🛠️ Abrir e rodar o projeto

Faça o download do projeto pelo git, podendo ser pelo comando gitclone ou baixando o arquivo compactado.

## 📁 Acesso ao projeto

#### Clone o projeto
**``git clone git@github.com:seuprojeto``** 

#### Acesse o projeto
**``cd gfhgfhg``** 

#### Instale as dependências e o framework
**``composer install --no-scripts``** 

#### Copie o arquivo .env.example
**``cp .env.example .env``** 


#### Crie uma nova chave para a aplicação
**``php artisan key:generate``** <br/>
Em seguida você deve configurar o arquivo .env com o nome do banco, usuário e senha do seu banco de dados.


#### Rodar as migrations
**``php artisan migrate --seed``** 


#### instalar dependências "node modules" e iniciar servidor
**``npm install``** 
**``npm run dev``** 


#### hospeda seu projeto em seu servidor local
**``php artisan serve``** 

**Após todos esses comandos, visualize seu projeto na porta 8000**

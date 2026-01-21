# Aplicação Web para Gerenciamento de Usuários - Vaga Estágio

Este projeto é uma aplicação web simples desenvolvida para o gerenciamento de usuários, com dados JSON, sem necessidade de banco de dados.

## Funcionalidades
* **Listagem de usuários na tela inicial**: Permite visualizar os usuários cadastrados em formato de tabela
* **Cadastro de usuários**: Inclusão de novos usuários com Nome, Email e Telefone.
* **Edição de usuário**: Permite editar as informações dos usuários cadastrados, seja quais for.
* **Exclusão de usuário**: Permite realizar a remoção completa do usuário existente.

## O que foi utilizado
* **Linguagem**: PHP 8.x
* **Frontend**: HTML, CSS e Bootstrap 5
* **Armazenamento**: Arquivo JSON ('usuarios.json')

## Estrutura
* /assets/views : Contém as páginas de cadastro ('create.php'), edição ('edit.php') e exclusão ('delete.php').
* /reutilizaveis : Contém as funções globais de leitura/escrita e os componentes de interface ('header.php' e 'footer.php').


## Como rodar
1. Clone o repositório ou então baixe os arquivos zipados para o seu servidor local, por exemplo em 'htdocs' na pasta xampp
2. Ative o servidor Apache 
3. Coloque o link do projeto no navegador que é 'http://localhost/aplicacao_estagio/index.php'
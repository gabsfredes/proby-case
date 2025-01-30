# Desafio para desenvolvedor ProbY

Este projeto foi desenvolvido através de um desafio para uma vaga de desenvolvedor. O cenário do projeto era: Uma empresa precisa de uma aplicação simples para gerenciar os projetos internos. O sistema deve permitir cadastro, listagem, edição e exclusão de projetos, além de autenticação para diferentes usuários.

## Funcionalidades implementadas
### Gerenciamento
É possível realizar a inclusão, edição, exclusão de projetos no sistema, além de visualizar os projetos existentes. Na tela inicial, os projetos possuem uma listagem paginada, sendo 5 (cinco) projetos por página.

### Validações
Os campos obrigatórios são validados tanto no front quanto no backend. Caso haja uma mensagem de erro, ela é exibida de forma amigável ao usuário. Exemplo de mensagem de erro:
![Captura de tela 2025-01-28 172437](https://github.com/user-attachments/assets/4001da9d-81b2-43b9-9ffb-9c21b495148f)

### Tema
É possível alternar entre um tema claro e tema escuro pelo menu da aplicação.
![dark](https://github.com/user-attachments/assets/c445c0e6-534c-4953-b3a2-c231eaea3aa9)

### Autenticação
Somente usuários que tiverem feito login podem utilizar o sistema. Caso não haja uma conta logada, o usuário verá somente a tela de visitante. A autenticação pode ser feita criando uma conta. Foi utilizado _Laravel Breeze_ para esta funcionalidade.

## Informações técnicas do projeto
Foi utilizado o framework Laravel. Para o banco, optei pelo MySql, e para o controle de versionamento de código  Git/GitHub. O padrão MVC foi aplicado ao longo do desenvolvimento de todo projeto.

Foi utilizado _migrations_ para gerar a tabela que guarda as informações dos projetos, e para popular esta e a tabela de usuários (que vem com o Laravel Breeze), foram criados **seeders** e **factories**, fazendo o preenchimento do banco de dados com informações fictícias.

A estilização do projeto foi feita com Tailwind CSS e SweetAlerts.

## Como rodar o projeto
As instruções de como rodar o projeto se encontram na release disposta aqui na plataforma GitHub. Você pode acessar a Release 1.0 [clicando aqui.](https://github.com/gabsfredes/proby-case/releases/tag/v1.0)

Caso queira utilizar o projeto e realizar o CRUD via API, pode ser feito a leitura da Release 1.1 através [deste link.](https://github.com/gabsfredes/proby-case/releases/tag/v1.1)

### Comentários do Autor
As minhas escolhas para este projeto foram baseadas em familiaridade, vendo que eu já possuía conhecimento com banco de dados MySql, com o framework Tailwind e com a linguagem PHP. Meu maior desafio foi aprender a utilizar o framework Laravel, pois até o momento deste desafio não havia me aprofundado nele, mas como a sua estrutura é similar à outros, como React por exemplo, não senti uma dificuldade grande de aprendizado.

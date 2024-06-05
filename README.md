# savings-tracker-app

Baseado nas descrições a seguir, desenvolva em html,css, php e javascript caso precise, o app, não se esqueça que irei conectar minha database wamp mysql.
Desenvolva um conjunto de páginas da web e os códigos correspondentes para uma aplicação que inclua as seguintes funcionalidades:

É um projeto de faculdade, entao faça da maneira mais rapida e simples, mas nao feia

Meu banco de dados:
===Banco de dados projetofinanceiro

== Estrutura para tabela categoria

|------
|Coluna|Tipo|Nulo|Padrão
|------
|//**id**//|int|Não|
|nome|varchar(255)|Não|
== Despejando dados para a tabela categoria

== Estrutura para tabela conta

|------
|Coluna|Tipo|Nulo|Padrão
|------
|//**id**//|int|Não|
|saldo|float|Não|
|emailUsuario|varchar(255)|Sim|NULL
== Despejando dados para a tabela conta

== Estrutura para tabela economia

|------
|Coluna|Tipo|Nulo|Padrão
|------
|//**id**//|int|Não|
|descricao|varchar(255)|Não|
|valor|decimal(10,2)|Não|
|data|date|Não|
|usuario_email|varchar(255)|Não|
== Despejando dados para a tabela economia

== Estrutura para tabela investimento

|------
|Coluna|Tipo|Nulo|Padrão
|------
|//**id**//|int|Não|
|nome|varchar(255)|Não|
|valor_atual|decimal(10,2)|Não|
|retorno|decimal(10,2)|Não|
|data|date|Não|
|usuario_email|varchar(255)|Não|
== Despejando dados para a tabela investimento

== Estrutura para tabela transacao

|------
|Coluna|Tipo|Nulo|Padrão
|------
|//**id**//|int|Não|
|descricao|varchar(255)|Sim|NULL
|valor|float|Não|
|data|date|Não|
|tipo|varchar(50)|Não|
|idConta|int|Sim|NULL
|idCategoria|int|Sim|NULL
== Despejando dados para a tabela transacao

== Estrutura para tabela usuario

|------
|Coluna|Tipo|Nulo|Padrão
|------
|nomeCompleto|varchar(255)|Não|
|//**email**//|varchar(191)|Não|
|senha|varchar(255)|Não|
== Despejando dados para a tabela usuario




Gostaria que você criasse uma interface de aplicativo móvel, nao se esqueça que é web, com as seguintes funcionalidades e páginas:

Página de cadastro/login(funcional):

Campos para inserir nome de usuário, email, senha e confirmação de senha
Botões para cadastrar ou fazer login

Página principal(funcional):

Seção de boas-vindas com nome do usuário
Barra de pesquisa
Grade com opções de recursos (por exemplo, páginas para Gastos, Economias, etc.)
Botão para adicionar novo gasto à gastos

Página de Gastos(funcional):

Gráfico simples mostrando gastos ao longo do tempo (semana, mês, ano, etc.)
Lista detalhando cada gasto com valor, data, categoria, etc.
Opções para filtrar/classificar gastos
Botão para adicionar novo gasto

Página de Economias(funcional):

Gráfico simples de progresso de economias ao longo do tempo
Lista de transações de economias, incluindo detalhes como valor, data e descrição
Botão para adicionar nova transação de economias
Página de Investimentos:

Gráfico simples de desempenho de investimentos ao longo do tempo
Lista de investimentos, mostrando detalhes como nome, valor atual e retorno
Botão para adicionar novo investimento

A interface deve seguir princípios de design responsivo, ser visualmente atraente e fácil de usar. Utilize uma paleta de cores vibrante com predominância de vermelho e branco. Aplique os padrões e guidelines de design de materiais modernos.
. Integre com banco de dados para armazenar dados do usuário. Faça uso de animações e transições suaves. Otimize o aplicativo para performance e eficiência."

Nao deixe nada faltando, implemente tudo o necessario, utilizando bibliotecas de sua escolha
Faça com um design moderno e elegante


Requisitos Funcionais
1: O aplicativo deve permitir que os usuários rastreiem suas despesas e receitas. 
2: O aplicativo deve permitir que os usuários visualizem seu histórico de transações. 
3: O aplicativo deve permitir que os usuários recebam notificações sobre pagamentos futuros. 
4: O aplicativo deve ser atualizado regularmente para incorporar as últimas correções de segurança. A frequência das atualizações deve ser definida com base na natureza e no risco das vulnerabilidades identificadas.

Requisitos Não Funcionais
1: O aplicativo deve ser fácil de usar, com uma interface intuitiva. 
2: O aplicativo deve ser capaz de sincronizar dados entre vários dispositivos. 
3: Todas as comunicações entre o aplicativo e o servidor devem ser criptografadas para garantir a segurança dos dados.

Tenha certeza que os graficos estejam funcionais, e não se esqueça da add_gastos, add_investimento, e add_economia, com o codigo de cada função sem falta, tambem, de acordo com o banco de dados

## Collaborate with GPT Engineer

This is a [gptengineer.app](https://gptengineer.app)-synced repository 🌟🤖

Changes made via gptengineer.app will be committed to this repo.

If you clone this repo and push changes, you will have them reflected in the GPT Engineer UI.

## Tech stack

This project is built with React and Chakra UI.

- Vite
- React
- Chakra UI

## Setup

```sh
git clone https://github.com/GPT-Engineer-App/savings-tracker-app.git
cd savings-tracker-app
npm i
```

```sh
npm run dev
```

This will run a dev server with auto reloading and an instant preview.

## Requirements

- Node.js & npm - [install with nvm](https://github.com/nvm-sh/nvm#installing-and-updating)

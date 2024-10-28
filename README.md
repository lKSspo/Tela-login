Tela de Login e Sistema de Autenticação
Este projeto é uma aplicação simples de autenticação desenvolvida em PHP, usando a arquitetura MVC. Ele permite que usuários façam login, visualizem uma página inicial personalizada e encerrem a sessão.

Estrutura do Projeto
A estrutura de diretórios segue a arquitetura MVC (Model-View-Controller):

php
Copiar código
src/
├── controllers/
│   └── AuthController.php       # Lida com o login e logout do usuário
├── models/
│   └── User.php                 # Modelo de dados do usuário
├── views/
│   ├── home.php                 # Página inicial após login bem-sucedido
│   └── login.php                # Página de login
├── config.php                   # Arquivo de configuração (atualmente vazio)
public/
├── images/                      # Pasta de imagens, como logos
└── styles/                      # Pasta para arquivos CSS
Descrição dos Arquivos
controllers/AuthController.php: Controlador que gerencia o processo de login e logout. Recebe as credenciais do usuário, verifica a validade e inicia uma sessão em caso de sucesso. Caso contrário, redireciona o usuário de volta à página de login com uma mensagem de erro.

models/User.php: Modelo que simula um banco de dados de usuários. Atualmente, contém um array de usuários estáticos com email, name e password. Ele possui um método findByEmail para buscar usuários pelo email fornecido.

views/home.php: Página inicial exibida após o login bem-sucedido. Exibe uma mensagem de boas-vindas ao usuário e possui botões para diferentes ações. Inclui um link para logout.

views/login.php: Página de login onde os usuários inserem suas credenciais. Se as credenciais forem válidas, o usuário é redirecionado para a home.php; caso contrário, é exibida uma mensagem de erro.

config.php: Arquivo de configuração, atualmente vazio. Pode ser utilizado para definir variáveis de configuração no futuro.

Funcionalidades
Login: O usuário insere o email e a senha na login.php. O AuthController verifica as credenciais, e se forem válidas, a sessão é iniciada e o usuário é redirecionado para a home.php.

Logout: O usuário pode fazer logout a partir da home.php, o que encerra a sessão e redireciona para a login.php.

Validação de Credenciais: Se o email e/ou senha estiverem incorretos, uma mensagem de erro é exibida e o usuário permanece na login.php.

Executando o Projeto
Para rodar o projeto em um ambiente local:

Clone o repositório para seu ambiente local:

bash
Copiar código
git clone https://github.com/lKSspo/Tela-login.git
cd Tela-login
Inicie um servidor local PHP dentro do diretório public:

bash
Copiar código
php -S localhost:8000
Acesse o projeto em http://localhost:8000/views/login.php para visualizar a tela de login.

Exemplo de Usuários para Teste
Os usuários estão pré-definidos no modelo User.php. Alguns exemplos:

Email: admin@example.com

Senha: 123456

Email: user1@example.com

Senha: password123

Observações
O config.php está vazio, mas pode ser usado para armazenar futuras configurações do projeto.
Não há persistência de dados, os usuários são definidos em um array fixo no modelo User.php.

🍕 Pizzaria Yamanari - Sistema Administrativo
https://yamanarimatt.github.io/Pizzaria/
Sistema web simples para gerenciamento de pedidos e mensagens de contato de uma pizzaria fictícia.

📋 Funcionalidades
✅ Login Administrativo: Protege as áreas restritas do site.

✅ Listagem de Pedidos: Exibe todos os pedidos feitos pelos clientes.

✅ Listagem de Contatos: Mostra todas as mensagens enviadas via formulário de contato.

✅ Layout Retrô: Design inspirado em cardápios antigos de pizzarias, com cores neutras, tons madeira e toques vintage.

🛠️ Tecnologias Utilizadas
Frontend: HTML5 + CSS3 (com Flexbox, responsividade e tema retrô)

Backend: PHP 7+

Banco de Dados: MySQL

Servidor Local: XAMPP

📂 Estrutura de Pastas
pgsql
Copiar
Editar
Pizzaria/
├── adm/
│   ├── painel.php
│   ├── pedidos.php
│   ├── contatos.php
│   └── logout.php
├── php/
│   ├── conexao.php
│   └── protect.php
├── css/
│   └── style.css
├── index.php
└── contato.php
💾 Configuração do Banco de Dados
Banco: pizzaria
Tabela: pedidos
sql
Copiar
Editar
CREATE TABLE pedidos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pizza VARCHAR(50) NOT NULL,
  quantidade INT NOT NULL,
  data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Tabela: contatos
sql
Copiar
Editar
CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  mensagem TEXT NOT NULL,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
🔑 Login Administrativo
O sistema usa uma proteção simples por sessão.

Login fictício padrão (exemplo):

Usuário: admin

Senha: 1234

(Você pode criar sua própria tela de login e lógica no protect.php e login.php.)

🖥️ Como Rodar Localmente
Copie a pasta do projeto para o diretório htdocs do XAMPP.

Importe as tabelas no phpMyAdmin.

Inicie o Apache e o MySQL no XAMPP.

Acesse:
👉 http://localhost/Pizzaria

🎨 Screenshots (Exemplo)
Tela de Pedidos 📋

Tela de Contatos 📬

(Substitua os links acima por screenshots reais do seu projeto depois!)

👨‍💻 Autor
Matheus Victor Moreira Yamanari
Projeto acadêmico | Curso de Análise e Desenvolvimento de Sistemas

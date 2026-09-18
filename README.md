# Sistema Simples de Autenticação e Cadastro em PHP

Um sistema de login, cadastro e listagem de usuários desenvolvido em PHP nativo utilizando banco de dados MySQL via extensão `mysqli`.

---

## Tecnologias Utilizadas

- **Linguagem**: PHP
- **Banco de Dados**: MySQL
- **Front-end**: HTML5 e CSS3

---

## Funcionalidades

1. **Autenticação de Usuários**:
   - Tela de login com verificação de credenciais (`index.php`).
   - Controle e proteção de acesso a páginas restritas através de `session_start()`.
   - Encerramento seguro da sessão com `logout.php`.

2. **Cadastro de Usuários**:
   - Formulário na página principal (`home.php`) para registrar novos usuários no banco de dados.

3. **Listagem de Usuários**:
   - Visualização em formato de tabela (`tabela.php`) exibindo todos os usuários cadastrados (ID, Nome de usuário e Senha).

---

## Estrutura de Arquivos

```
.
├── conexao_db.php       # Conexão com o banco de dados MySQL
├── home.php             # Página principal (painel logado + cadastro)
├── index.php            # Tela de login
├── logout.php           # Script para encerrar a sessão
├── tabela.php           # Componente de listagem dos usuários
└── infra/
    └── db/
        └── script.sql   # Script de criação do banco e dados iniciais
```

---

## Como Executar o Projeto

### 1. Pré-requisitos
- Servidor web com suporte a PHP (ex: XAMPP, WAMP, Laragon ou PHP CLI embutido).
- Banco de dados MySQL ou MariaDB.

### 2. Configurar o Banco de Dados
1. Acesse o seu gerenciador de banco de dados (ex: phpMyAdmin, DBeaver ou CLI do MySQL).
2. Execute o script contido em [`infra/db/script.sql`](file:///infra/db/script.sql):
   ```sql
   CREATE DATABASE sistema_simples;
   USE sistema_simples;

   CREATE TABLE usuario (
       id INT AUTO_INCREMENT PRIMARY KEY,
       usuario VARCHAR(255) NOT NULL,
       senha VARCHAR(255) NOT NULL
   );

   INSERT INTO usuario(usuario, senha) VALUES ('admin', '123');
   ```

### 3. Configurar a Conexão no PHP
Abra o arquivo [`conexao_db.php`](file:///conexao_db.php) e ajuste as variáveis de acesso conforme seu ambiente:
```php
$host = "localhost";
```
Em seguida, acesse no navegador: `http://localhost/atividade-teste-1`.

---

## Credenciais Padrão

- **Usuário**: `admin`
- **Senha**: `123`

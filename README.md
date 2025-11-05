# 🧩 Projeto 1 – Sistema de Cadastro de Clientes e Produtos

Este projeto foi desenvolvido em **PHP** com **MySQL** e tem como objetivo permitir o **cadastro, listagem e administração de clientes e produtos**.
Ele é compatível com o ambiente **XAMPP** e cria automaticamente o banco de dados na primeira execução.

---

## 🚀 Funcionalidades

* ✅ Cadastro de clientes (nome, cidade e estado)
* ✅ Cadastro de produtos (nome, número de série, preço e quantidade em estoque)
* ✅ Listagem completa com opção de alterar e excluir
* ✅ Interface simples com navegação entre abas

---

## 🧱 Estrutura do Projeto

```
projeto1/
├── admin/
│   ├── admin_clientes.php
│   ├── admin_produtos.php
│   ├── cadastra_clientes.php
│   ├── cadastra_produtos.php
│   ├── form_clientes.php
│   ├── form_produtos.php
│   ├── altera_clientes.php
│   ├── altera_produtos.php
│   ├── delete_cliente.php
│   ├── delete_produto.php
│   ├── form_produtos_alterar.php
│   ├── form_clientes_alterar.php 
│   ├── index.php
│   └── config.inc.php
│
├── clientes.php
├── conteudo.php
├── faleconosco.php    
├── produtos.php 
├── modelo.html
├── quemsomos.php
├── topo.php
├── index.php
├── rodape.php  
├── projeto1.sql
└── README.md
```

---

## 🗄️ Banco de Dados

O sistema utiliza o banco **projeto1**, que contém as tabelas `clientes` e `produtos`.

### Script SQL (`projeto1.sql`)

```sql
-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS projeto1
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE projeto1;

-- ===============================
-- Tabela: clientes
-- ===============================
CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(100) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  estado CHAR(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ===============================
-- Tabela: produtos
-- ===============================
CREATE TABLE IF NOT EXISTS produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_produto VARCHAR(100) NOT NULL,
  numero_serie VARCHAR(50) NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  quantidade_estoque INT NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

---

## ⚙️ Como Executar o Projeto

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/seuusuario/projeto1.git
```

### 2️⃣ Mover para o diretório do XAMPP

Coloque a pasta dentro do diretório `htdocs`, por exemplo:

```
C:\xampp\htdocs\TrabalhoDaniel\projeto1
```

### 3️⃣ Importar o banco de dados

Abra o **phpMyAdmin**, clique em **Importar**, e selecione o arquivo:

```
projeto1.sql
```

### 4️⃣ Iniciar o servidor

* Inicie **Apache** e **MySQL** no **XAMPP Control Panel**
* Acesse no navegador:

  ```
  http://localhost/TrabalhoDaniel/projeto1/
  ```

---

## 🧑‍💻 Tecnologias Utilizadas

* PHP 
* MySQL
* HTML / CSS / Bootstrap 
* XAMPP

---

## 👥 Integrantes do Projeto

* **Uirá Xavier de Medeiros Garro**
* **William Aguiar Barreto**
* **Rodrigo Ono Galvão**

---

🟩 *Este projeto foi desenvolvido como parte de uma atividade prática de desenvolvimento PHP com MySQL.*

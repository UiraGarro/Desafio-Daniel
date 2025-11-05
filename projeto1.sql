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

-- ===============================
-- (Opcional) Inserção de dados iniciais
-- ===============================
INSERT INTO clientes (cliente, cidade, estado) VALUES
('Maria Silva', 'São Paulo', 'SP'),
('João Pereira', 'Curitiba', 'PR');

INSERT INTO produtos (nome_produto, numero_serie, preco, quantidade_estoque) VALUES
('Notebook Dell', 'A12345', 3500.00, 10),
('Mouse Logitech', 'B98765', 120.00, 50);

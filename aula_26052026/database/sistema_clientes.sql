USE sistema_clientes; 13ms

CREATE DATABASE sistema_clientes
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE sistema_clientes;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    telefone VARCHAR(20) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
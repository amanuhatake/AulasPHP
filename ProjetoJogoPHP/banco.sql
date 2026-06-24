-- ================================================
-- Script SQL – Sistema CRUD de Jogos
-- Execute este arquivo no phpMyAdmin
-- ================================================

-- 1. Cria o banco de dados
CREATE DATABASE IF NOT EXISTS sistema_jogos
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- 2. Seleciona o banco
USE sistema_jogos;

-- 3. Cria a tabela
CREATE TABLE jogos (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(150) NOT NULL,
    plataforma VARCHAR(60)  NOT NULL,
    genero     VARCHAR(60)  NOT NULL,
    ano        YEAR         NOT NULL,
    preco      DECIMAL(8,2) NOT NULL
);

-- 4. Dados de exemplo
INSERT INTO jogos (nome, plataforma, genero, ano, preco) VALUES
('Star Wars - Fallen Order',  'PS5', 'Ação',     2022, 299.90),
('Minecraft',   'PC',  'Sandbox',  2011,  99.90),
('Elden Ring',  'PC',  'RPG',      2022, 249.90);
('League Of Legends',  'PC',  'RPG',      2022, 00.00);
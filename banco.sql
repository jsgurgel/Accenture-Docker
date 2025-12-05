CREATE DATABASE IF NOT EXISTS toshirodb CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE toshirodb;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome, email) VALUES
('Toshiro Shibakita','toshiro@example.com'),
('Denilson Bonatti','denilson@example.com');

# Controle-de-Funcionarios
CRUD de RH web feito com HTML, PHP, CSS.

# Criar-tabela

CREATE DATABASE controlefuncionarios

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    cargo VARCHAR(100),
    salario DECIMAL(10, 2),
    data_admissao DATE,
    obs TEXT,
    faltas INT
);

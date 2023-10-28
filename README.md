# Controle-de-Funcionarios
CRUD de RH web feito com HTML, PHP, JS, CSS.

24/10 -> Criado styleListagem.css e iniciado a pagina listagem_funcionarios.html.

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


# Alimentar-tabela

INSERT INTO Funcionarios (nome, cpf, cargo, salario, data_admissao, obs) VALUES
('Paulo', '11111111111', 'Programador Junior', 3000.00, '2023-05-20', 'Observação 1'),
('Maria', '22222222222', 'Analista de Dados', 4500.50, '2023-04-15', 'Observação 2'),
('João', '33333333333', 'Designer Gráfico', 2800.75, '2023-06-10', 'Observação 3'),
('Ana', '44444444444', 'Gerente de Projetos', 5500.00, '2023-03-05', 'Observação 4');



<?php

require_once 'conexao.php';

if (isset($_POST['cpf'])) {
    $cpf = $_POST['cpf'];

    $sql = $pdo->prepare("SELECT * FROM funcionarios WHERE cpf = :cpf");
    
    $sql->bindParam(':cpf', $cpf);

    $sql->execute();
    
    $funcionario = $sql->fetch(PDO::FETCH_ASSOC);
}


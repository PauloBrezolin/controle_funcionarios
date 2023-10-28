<?php

require_once 'conexao.php';

if (isset($_POST['cadastrarBotao'])) {
    $sql = $pdo->prepare("INSERT INTO funcionarios (nome, cpf, cargo, salario, data_admissao, obs) VALUE (?, ?, ?, ?, ?, ?)");

    $sql->execute(array(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['cargo'],
        $_POST['salario'],
        $_POST['data_admissao'],
        $_POST['obs'],
    ));
    echo 'Inserido com sucesso!';
}
?>
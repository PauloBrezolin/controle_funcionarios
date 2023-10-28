<?php

require_once 'conexao.php';

if (isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];

    if (isset($_POST['nome'])) {
        $sql = $pdo->prepare("UPDATE funcionarios SET nome = ?, cpf = ?, cargo = ?, salario = ?, data_admissao = ? WHERE id = ?");
        $sql->execute(array($_POST['nome'], $_POST['cpf'], $_POST['cargo'], $_POST['salario'], $_POST['data_admissao'], $id));
        echo 'Atualizado com sucesso!';
    }

    $sql = $pdo->prepare("SELECT * FROM funcionarios WHERE id = ?");
    $sql->execute(array($id));
    $funcionario = $sql->fetch(PDO::FETCH_ASSOC);

}
?>
<?php
require_once 'conexao.php';

if (isset($_POST['cpf'])) {
    $faltas = $_POST['faltas'];
    $cpf = $_POST['cpf'];
    $dias_mes = 30;

    $sql = $pdo->prepare("SELECT salario FROM funcionarios WHERE cpf = :cpf");
    $sql->bindParam(':cpf', $cpf);
    $sql->execute();

    $salario = $sql->fetch(PDO::FETCH_ASSOC);

    if ($salario) {
        $salario_dia = $salario['salario'] / $dias_mes;
        $salario_descontado = $salario['salario'] - ($salario_dia * $faltas);

        $sql1 = $pdo->prepare("UPDATE funcionarios SET faltas = :faltas, salario = :salario WHERE cpf = :cpf");
        $sql1->bindParam(':faltas', $faltas);
        $sql1->bindParam(':salario', $salario_descontado);
        $sql1->bindParam(':cpf', $cpf);

        $sql1->execute();
        echo 'Salário e faltas foram atualizadas!';
    }
}
?>

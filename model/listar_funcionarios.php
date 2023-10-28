<?php

require_once 'conexao.php';

$sql = $pdo->prepare("SELECT * FROM funcionarios");

$sql->execute();

$funcionarios = $sql->fetchAll();

?>
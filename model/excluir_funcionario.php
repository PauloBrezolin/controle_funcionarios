<?php

require_once 'conexao.php';

if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $pdo->exec("DELETE FROM funcionarios WHERE id=$id");
    echo 'Deletado com sucesso! ' . '<hr>';
}

?>
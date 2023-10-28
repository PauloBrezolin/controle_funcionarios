<?php

$host = 'localhost';
$port = '3306';
$dbname = 'controlefuncionarios';
$user = 'root';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro com banco de dados: ' . $e->getMessage();
    exit();
} catch (Exception $e) {
    echo 'Erro genérico: ' . $e->getMessage();
    exit();
}

?>
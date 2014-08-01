<?php
// Database Parameters
$driver = "mysql";
$host   = "localhost";
$dbName = "02";
$dbUser = "root";
$dbPass = "123";

try {
    $conn = new \PDO("{$driver}:host={$host};dbname={$dbName}", $dbUser, $dbPass);
} catch (\PDOException $ex) {
    die("Erro de conexão<br />Código: ".$ex->getCode()."<br />Mensagem: ".$ex->getMessage());
}
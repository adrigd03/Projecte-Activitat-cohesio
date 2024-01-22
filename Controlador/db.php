<?php
// Funció per connectar-se a la base de dades amb PDO
function connectar(){
    $host = "localhost";
    $dbname = "activitatcohesio";
    $username = "root";
    $password = "";
    $charset = "utf8mb4";
    $collate = "utf8mb4_unicode_ci";
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $opcions = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
    ];
    try{
        $pdo = new PDO($dsn, $username, $password, $opcions);
        return $pdo;
    }catch(PDOException $e){
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
}

?>
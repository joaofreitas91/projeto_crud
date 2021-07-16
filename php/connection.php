<?php

$hostname = 'localhost';
$database = 'projeto_php_estruturado';
$user = 'root';
$pass = '';

$connection;

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    // echo $e->getMessage();
    echo "Error";
}

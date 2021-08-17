<?php

$name = $_POST['name_client'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$email = $_POST['email'] ?? null;

include_once('../php/connection.php');

$connection->exec("INSERT INTO customers VALUES (DEFAULT, '$name', '" . $cpf . "', '$email')");
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

unset($connection);
echo "<div class='message-wrapper'><p class='success'>$name foi inserido com sucesso.</p></div>";

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/cliente/readClient.php";
header("Refresh:2; $page");

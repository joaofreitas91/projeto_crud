<?php

$name = $_POST['name_client'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$email = $_POST['email'] ?? null;



function limpaCPF($valor)
{
    $valor = trim($valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace("-", "", $valor);

    return $valor;
}


include_once('../php/connection.php');

// $connection->exec("INSERT INTO customers VALUES (DEFAULT, '$name', '" . limpaCPF($cpf) . "', '$email')");


$queryyy = $connection->prepare("INSERT INTO customers VALUES (:id, :name, :cpf, :email, :deleted)");
$queryyy->execute([
    ":id" => "default",
    ":name" => $name,
    ":cpf" => limpaCPF($cpf),
    ":email" => $email,
    ":deleted" => null
]);


$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

unset($connection);
echo "<div class='message-wrapper'><p class='success'>$name foi inserido com sucesso.</p></div>";

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/client/readClient.php";
header("Refresh:2; $page");

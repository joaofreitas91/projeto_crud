<?php

$clientId = $_POST['name_client'];
$productId = $_POST['name_product'];
$valorUnitario = $_POST['valor_unitario'];
$quantity = $_POST['quantidade'];
$total = $_POST['total'];

// echo $clientId . '<br>';
// echo $productId . '<br>';
// echo $valorUnitario . '<br>';
// echo $quantity . '<br>';
// echo $total . '<br>';



include_once('../php/connection.php');

$connection->exec("INSERT INTO orders values (DEFAULT, NOW(), $clientId, $productId, $valorUnitario, $quantity, $total, DEFAULT)");
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

unset($connection);
echo "<div class='message-wrapper'><p class='success'> ordem inserida com sucesso.</p></div>";

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/order/readOrder.php";
header("Refresh:2; $page");

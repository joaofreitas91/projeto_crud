<?php

$name_product = $_POST['name_product'] ?? null;
$bar_code = $_POST['bar_code'] ?? null;
$unitary_value = $_POST['unitary_value'] ?? null;

echo $name_product;
echo $bar_code;
echo $unitary_value;



include_once('../php/connection.php');

$connection->exec("INSERT INTO products (name_product, bar_code, unitary_value) VALUES ('$name_product', '" . $bar_code . "', '$unitary_value')");
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

unset($connection);
echo "<div class='message-wrapper'><p class='success'>$name_product foi inserido com sucesso.</p></div>";

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/products/readProducts.php";
header("Refresh:2; $page");

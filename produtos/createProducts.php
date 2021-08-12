<?php

$nomeProduto = $_POST['nome_produto'] ?? null;
$codBarras = $_POST['cod_barras'] ?? null;
$valorUnitario = $_POST['valor_unitario'] ?? null;



include_once('../php/connection.php');

$connection->exec("INSERT INTO produto VALUES (DEFAULT, '$codBarras', '" . $nomeProduto . "', '$valorUnitario')");
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

unset($connection);
echo "<div class='message-wrapper'><p class='success'>$nomeProduto foi inserido com sucesso.</p></div>";

$page = $protocol . $_SERVER["HTTP_HOST"] . "/projetos-newtab/projeto_php/produtos/readProducts.php";
header("Refresh:2; $page");

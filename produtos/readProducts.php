<?php
include_once('../php/connection.php');

$produtos = $connection->query('SELECT * FROM produto');
foreach ($produtos as $produto) {

    echo  '<p>' . $produto["nome_produto"] . '</p>';
}

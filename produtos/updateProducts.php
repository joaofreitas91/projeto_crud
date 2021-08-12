<?php

include_once('../php/connection.php');

$id = $_POST["id"];
$name = $_POST["nome_produto"];
$codBarras = $_POST["cod_barras"];
$valorUn = $_POST["valor_unitario"];


echo $id;
echo $name;
echo $codBarras;
echo $valorUn;

$update = $connection->exec("UPDATE produto SET nome_produto='$name', cod_barras=$codBarras, valor_unitario='$valorUn' WHERE id=$id");
?>

<script>
    window.open("./readProducts.php", "_self");
</script>
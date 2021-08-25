<?php

include_once('../php/connection.php');

$id = $_POST["id"];
$name = $_POST["name_product"];
$barCode = $_POST["bar_code"];
$unitaryValue = $_POST["unitary_value"];


echo $id;
echo $name;
echo $codBarras;
echo $valorUn;

// $update = $connection->exec("UPDATE produto SET nome_produto='$name', cod_barras=$codBarras, valor_unitario='$valorUn' WHERE id=$id");
?>

<!-- <script>
    window.open("./readProducts.php", "_self");
</script> -->
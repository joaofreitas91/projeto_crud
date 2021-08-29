<?php

include_once('../php/connection.php');

$id = $_POST["id"];
$idClient = $_POST["name_client"];
$idProduct = $_POST["name_product"];
$unitaryValue = $_POST["valor_unitario"];
$quantity = $_POST["quantidade"];
$total = $_POST["total"];



// echo $id;
// echo $idClient;
// echo $idProduct;
// echo $quantity;
// echo $unitaryValue;
// echo $total;

// echo "UPDATE products SET client_id=$idClient, product_id=$idProduct, unitaryValue=$unitaryValue, quantity=$quantity, total=$total WHERE id=$id";
// exit();

$update = $connection->exec("UPDATE orders SET client_id=$idClient, product_id=$idProduct, unitaryValue=$unitaryValue, quantity=$quantity, total=$total WHERE order_number=$id");
?>

<script>
    window.open("./readOrder.php", "_self");
</script>
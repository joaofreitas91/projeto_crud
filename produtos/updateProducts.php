<?php

include_once('../php/connection.php');

$id = $_POST["id"];
$name = $_POST["name_product"];
$barCode = $_POST["bar_code"];
$unitaryValue = $_POST["unitary_value"];


echo $id;
echo $name;
echo $barCode;
echo $unitaryValue;

$update = $connection->exec("UPDATE products SET name_product='$name', bar_code=$barCode, unitary_value='$unitaryValue' WHERE id=$id");
?>

<script>
    window.open("./readProducts.php", "_self");
</script>
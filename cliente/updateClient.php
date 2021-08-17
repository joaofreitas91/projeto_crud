<?php

include_once('../php/connection.php');

$id = $_POST["id"];
$name = $_POST["name_client"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];


// echo $id;
// echo $name;
// echo $cpf;
// echo $email;

$update = $connection->exec("UPDATE customers SET name_client='$name', cpf=$cpf, email='$email' WHERE id=$id");
?>

<script>
    window.open("./readClient.php", "_self");
</script>
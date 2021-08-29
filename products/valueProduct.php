<?php

include_once('../php/connection.php');

$query = $connection->prepare("SELECT unitary_value FROM products WHERE id = :id");
$query->execute([
    ':id' => $_GET['id'],
]);
echo json_encode($query->fetch());

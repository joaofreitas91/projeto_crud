<?php
include_once('../php/connection.php');

$id = $_GET["id"];

$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

$deleteClient = $connection->exec(" UPDATE orders SET deleted_at = now() WHERE order_number = $id");

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/order/readOrder.php";
header("Location: $page");

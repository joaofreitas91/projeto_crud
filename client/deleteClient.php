<?php
include_once('../php/connection.php');

$id = $_GET["id"];

$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

$deleteClient = $connection->exec(" UPDATE customers SET deleted_at = now() WHERE id=$id");

$page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/client/readClient.php";
header("Location: $page");

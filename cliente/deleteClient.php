<?php
include_once('../php/connection.php');

$id = $_GET["id"];

$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

$deleteClient = $connection->exec(" DELETE FROM cliente WHERE id=$id");

$page = $protocol . $_SERVER["HTTP_HOST"] . "/projetos-newtab/projeto_php/cliente/readClient.php";
header("Location: $page");

// echo $page;



// $page = $_SERVER['PHP_SELF'];

// $_SERVER["SERVER_NAME"]
// $sec = "0";
// header("Refresh: $sec; url=$page");



?>

<!-- <script>
    window.open(document.referrer, "_self");
</script> -->

<!-- $page = $_SERVER["SERVER_NAME"]. "/BLABLA";
header("Refresh:0 ; url=$page"); -->
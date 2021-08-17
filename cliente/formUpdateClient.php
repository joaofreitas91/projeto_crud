<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/index.css">
    <script src="../js/scripts.js"></script>
    <title>Alterar Cliente</title>
</head>

<body>
    <?php
    include_once('../php/connection.php');
    $select = $connection->query('SELECT * FROM customers WHERE id=' . $_GET["id"]);
    $dataClient = $select->fetchAll();
    // print_r($dataClient);
    ?>

    <div class="cont-form">
        <h1 class="title-form">Alteração de Cliente</h1>
        <form method="POST" action="./updateClient.php" class="form">
            <label for="name_client" class="label-form">Nome:</label>
            <input type="text" class="inp-form" id="name_client" name="name_client" value="<?php echo $dataClient[0]["name_client"] ?>" autocomplete="off" required />
            <label for="cpf" class="label-form">CPF:</label>
            <input type="text" class="inp-form" id="cpf" name="cpf" value="<?php echo $dataClient[0]["cpf"] ?>" autocomplete="off" required />
            <label for="email" class="label-form">Email:</label>
            <input type="email" class="inp-form" id="email" name="email" value="<?php echo $dataClient[0]["email"] ?>" autocomplete="off" />
            <input type="hidden" name="id" value="<?php echo $dataClient[0]["id"] ?>" />
            <div class="btns-form">
                <input type="submit" class="btn-form" value="Alterar Cliente" />
                <input type="button" class="btn-form" value="Voltar" onclick="backClient()" />
            </div>
        </form>
    </div>

</body>

</html>
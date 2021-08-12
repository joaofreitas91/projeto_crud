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
    $select = $connection->query('SELECT * FROM produto WHERE id=' . $_GET["id"]);
    $dataProduct = $select->fetchAll();
    // print_r($dataProduct);
    ?>

    <div class="cont-form">
        <h1 class="title-form">Alteração de Produto</h1>
        <form method="POST" action="./updateProducts.php" class="form">
            <label for="nome_produto" class="label-form">Nome Produto:</label>
            <input type="text" class="inp-form" id="nome_produto" name="nome_produto" value="<?php echo $dataProduct[0]["nome_produto"] ?>" autocomplete="off" required />

            <label for="cod_barras" class="label-form">Código de Barras:</label>
            <input type="text" class="inp-form" id="cod_barras" name="cod_barras" value="<?php echo $dataProduct[0]["cod_barras"] ?>" autocomplete="off" required />

            <label for="valor_unitario" class="label-form">Valor Unitário:</label>
            <input type="text" class="inp-form" id="valor_unitario" name="valor_unitario" value="<?php echo $dataProduct[0]["valor_unitario"] ?>" autocomplete="off" />

            <input type="hidden" name="id" value="<?php echo $dataProduct[0]["id"] ?>" />
            <div class="btns-form">
                <input type="submit" class="btn-form" value="Alterar Produto" />
                <input type="button" class="btn-form" value="Voltar" onclick="backProduct()" />
            </div>
        </form>
    </div>

</body>

</html>
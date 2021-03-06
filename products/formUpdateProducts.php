<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <?php
    include_once('../php/connection.php');
    $select = $connection->query('SELECT * FROM products WHERE id=' . $_GET["id"]);
    $dataProduct = $select->fetchAll();
    // print_r($dataProduct);
    ?>

    <div class="cont-form">
        <h1 class="title-form">Alteração de Produto</h1>
        <form method="POST" action="./updateProducts.php" class="form" onsubmit="valida(event)">
            <label for="name_product" class="label-form">Nome Produto:</label>
            <input type="text" class="inp-form" id="name_product" name="name_product" oninput="upperCase(event)" value="<?php echo $dataProduct[0]["name_product"] ?>" autocomplete="off" required />

            <label for="bar_code" class="label-form">Código de Barras:</label>
            <input type="text" class="inp-form" id="bar_code" name="bar_code" maxlength="13" value="<?php echo $dataProduct[0]["bar_code"] ?>" autocomplete="off" required />

            <label for="unitary_value" class="label-form">Valor Unitário:</label>
            <input type="text" class="inp-form" id="unitary_value" name="unitary_value" value="<?php echo $dataProduct[0]["unitary_value"] ?>" autocomplete="off" />

            <input type="hidden" name="id" value="<?php echo $dataProduct[0]["id"] ?>" />
            <div class="btns-form">
                <input type="submit" class="btn-form" value="Alterar Produto" onclick="cadProduto()" />
                <input type="button" class="btn-form" value="Voltar" onclick="backProduct()" />
            </div>
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <div class="cont-form">
        <h1 class="title-form">Cadastro de Produtos</h1>
        <form method="POST" action="./createProducts.php" onsubmit="valida(event)" class="form">
            <label for="name_product" class="label-form">Nome Produto:</label>
            <input type="text" id="name_product" name="name_product" oninput="upperCase(event)" required class="inp-form" />
            <label for="cod_barras" class="label-form">Código de Barras:</label>
            <input type="text" id="bar_code" name="bar_code" max="13" class="inp-form" required />
            <label for="valor_unitario" class="label-form">Valor Unitário:</label>
            <input type="text" id="unitary_value" name="unitary_value" placeholder="R$ 0.000,00" class="inp-form" />
            <div class="btns-form">
                <input type="submit" value="Cadastrar" class="btn-form" />
                <input type="button" value="Voltar" onclick="backProduct()" class="btn-form" />
            </div>
        </form>
    </div>
</body>

</html>
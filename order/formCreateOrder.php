<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <div class="cont-form">
        <h1 class="title-form">Cadastro de Pedido</h1>
        <form method="POST" action="./createOrder.php" class="form">
            <label for="name_client" class="label-form">Nome Cliente:</label>
            <select name="name_client" id="name_client" class="inp-form">
                <option></option>
                <?php
                include_once('../php/connection.php');
                $customers = $connection->query('select * from customers');
                foreach ($customers as $cliente) {
                    echo '
                <option value="' . $cliente['id'] . '">' . $cliente['name_client'] . '</option>
                ';
                }
                ?>
            </select>
            <label for="nome_produto" class="label-form">Nome Produto:</label>
            <select name="name_product" id="name_product" onchange="getUnitaryValue(event)" class="inp-form">
                <option></option>
                <?php
                include_once('../php/connection.php');
                $products = $connection->query('select * from products');
                foreach ($products as $product) {
                    echo '
                <option value="' . $product['id'] . '">' . $product['name_product'] . '</option>
                ';
                }
                ?>
            </select>
            <script>
                function getUnitaryValue(event) {
                    fetch(`../products/valueProduct.php?id=${event.target.value}`).then(
                        response => response.json()
                    ).then(
                        raw => document.getElementById('valor_unitario').value = raw['unitary_value']
                    );
                }
            </script>
            <label for="valor_unitario" class="label-form">Valor Unitário:</label>
            <input type="number" id="valor_unitario" name="valor_unitario" autocomplete="off" maxlength="13" oninput="somar()" class="inp-form" readonly />
            <label for="quantidade" class="label-form">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" autocomplete="off" oninput="somar()" class="inp-form" />
            <label for="total" class="label-form">Total</label>
            <input type="number" id="total" name="total" class="inp-form" readonly>
            <div class="btns-form">
                <input type="submit" value="Cadastrar" class="btn-form" />
                <input type="button" value="Voltar" class="btn-form" onclick="backOrder()" />
            </div>
        </form>
    </div>
</body>

</html>
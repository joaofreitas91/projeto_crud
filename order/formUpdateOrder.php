<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <?php
    include_once('../php/connection.php');
    $select = $connection->query('SELECT o.order_number, o.product_id, o.quantity, o.total, o.client_id, p.unitary_value FROM orders o JOIN products p on o.product_id = p.id WHERE order_number=' . $_GET["id"]);
    $dataOrder = $select->fetchAll();
    // print_r($dataOrder);
    ?>

    <div class="cont-form">
        <h1 class="title-form">Alteração de Ordem</h1>
        <form method="POST" action="./updateOrder.php" class="form">

            <label for="name_client">Nome Cliente:</label>
            <select name="name_client" id="name_client">
                <?php
                include_once('../php/connection.php');
                $customers = $connection->query('select * from customers');

                foreach ($customers as $cliente) {
                    $selected = $dataOrder[0]['client_id'] == $cliente['id'] ? "selected" : "";
                    echo '
                    <option ' . $selected . ' value="' . $cliente['id'] . '">' . $cliente['name_client'] . '</option>
                ';
                }
                ?>
            </select>

            <label for="nome_produto">Nome Produto:</label>
            <select name="name_product" id="name_product">
                <?php
                include_once('../php/connection.php');
                $products = $connection->query('select * from products');
                foreach ($products as $product) {
                    $varolet = $dataOrder[0]['product_id'] == $product['id'] ? "selected" : "";
                    echo '
                <option ' . $varolet . ' value="' . $product['id'] . '">' . $product['name_product'] . '</option>
                ';
                }
                ?>
            </select>

            <label for="valor_unitario">Valor Unitário:</label>
            <input type="text" id="valor_unitario" name="valor_unitario" autocomplete="off" maxlength="13" oninput="somar()" value="<?php echo $dataOrder[0]["unitary_value"] ?>" />

            <label for="quantidade">Quantidade:</label>
            <input type="text" id="quantidade" name="quantidade" autocomplete="off" oninput="somar()" value="<?php echo $dataOrder[0]["quantity"] ?>" />

            <label for="total">Total</label>
            <input type="text" id="total" name="total" readonly value="<?php echo $dataOrder[0]["total"] ?>">
            <!-- <span type="text" id="total" name="total"> Valor Total </span> -->
            <br>
            <!-- <input type="button" value="Somar" onclick="somar()" /> -->
            <input type="submit" value="Cadastrar" />

            <input type="hidden" value="<?php echo $dataOrder[0]["order_number"] ?>" name="id" />

        </form>
    </div>

</body>

</html>
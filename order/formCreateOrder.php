<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/scripts.js" defer></script>
    <link rel="stylesheet" href="../style/index.css">
    <title>Create Product</title>
    <script src="../js/scripts.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <form method="POST" action="./createOrder.php" class="form">

        <label for="name_client">Nome Cliente:</label>


        <select name="name_client" id="name_client">
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

        <label for="nome_produto">Nome Produto:</label>
        <select name="name_product" id="name_product">
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

        <label for="valor_unitario">Valor Unitário:</label>
        <input type="text" id="valor_unitario" name="valor_unitario" autocomplete="off" maxlength="13" oninput="somar()" />

        <label for="quantidade">Quantidade:</label>
        <input type="text" id="quantidade" name="quantidade" autocomplete="off" oninput="somar()" />

        <label for="total">Total</label>
        <input type="text" id="total" name="total" readonly>
        <!-- <span type="text" id="total" name="total"> Valor Total </span> -->
        <br>
        <!-- <input type="button" value="Somar" onclick="somar()" /> -->
        <input type="submit" value="Cadastrar" />

    </form>
</body>

</html>
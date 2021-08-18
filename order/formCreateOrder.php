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
</head>

<body>
    <form method="GET" action="./createOrder.php" class="form">

        <label for="name_client">Nome Cliente:</label>
        <select name="name_client" id="name_client">
            <option></option>
            <?php
            include_once('../php/connection.php');
            $clientes = $connection->query('select * from customers');
            foreach ($clientes as $cliente) {
                echo '
                <option>' . $cliente['name_client'] . '</option>
                ';
            }
            ?>
        </select>

        <!-- <input type="text" id="nome_produto" name="nome_produto" required /> -->

        <label for="nome_produto">Nome Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required />

        <label for="cod_barras">Código de Barras:</label>
        <input type="text" id="cod_barras" name="cod_barras" required />

        <label for="valor_unitario">Valor Unitário:</label>
        <input type="text" id="valor_unitario" name="valor_unitario" />

        <label for="valor_unitario">Quantidade:</label>
        <input type="text" id="quantidade" name="quantidade" onchange="somar()" />

        <label for="total">Total</label>
        <input type="text" id="total" name="total"></input>
        <!-- <span type="text" id="total" name="total"> Valor Total </span> -->
        <br>
        <!-- <input type="button" value="Somar" onclick="somar()" /> -->
        <input type="submit" value="Cadastrar" />

    </form>
</body>

</html>
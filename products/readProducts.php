<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/scripts.js"></script>
</head>

<body>
    <main>
        <div class="nav-client">
            <input type="button" value="Cadastrar" class="btn-new" onclick="createProduto()">
            <input type="button" value="Voltar" class="btn-new" onclick="backHome()">
        </div>
        <table>
            <tr>
                <th>Nome Produto</th>
                <th>Cód Barras</th>
                <th>Valor Un</th>
                <th>Ações</th>
            </tr>
            <?php
            include_once('../php/connection.php');

            $produtos = $connection->query('SELECT * FROM products WHERE deleted_at is null');
            foreach ($produtos as $product) {
                echo  '
                    <tr>
                        <td> ' . $product['name_product'] . ' </td>
                        <td> ' . $product['bar_code'] . '</td>
                        <td> ' . $product['unitary_value'] .  '</td>
                        <td>
                            <a href="./formUpdateProducts.php?id=' . $product['id'] . '"><i class="far fa-edit"></i></a>
                            <a href="./deleteProducts.php?id=' . $product['id'] . '"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                        ';
            }
            ?>
        </table>
    </main>
</body>

</html>
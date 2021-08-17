<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordens</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/scripts.js"></script>
</head>

<body>
    <main>
        <div class="nav-client">
            <input type="button" value="Cadastrar" class="btn-new" onclick="cadOrder()">
            <input type="button" value="Voltar" class="btn-new" onclick="backHome()">
        </div>
        <table>
            <tr>
                <th>Numéro da Ordem</th>
                <th>Data da Ordem</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Valor Unitário</th>
                <th>Quantidade</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
            <?php
            include_once('../php/connection.php');

            $select = $connection->query('SELECT * FROM orders');
            foreach ($select as $order) {
                echo  '
                    <tr>
                        <td> ' . $order['order_number'] . ' </td>
                        <td> ' . $order['order_date'] . '</td>
                        <td> ' . $order['client_id'] .  '</td>
                        <td> ' . $order['product_id'] .  '</td>
                        <td> valor Unitario aqui</td>
                        <td> ' . $order['quantity'] .  '</td>
                        <td> valor Total aqui</td>
                        <td>
                            <a href="./formCreateOrder.html?id=' . $order['order_number'] . '"><i class="far fa-edit"></i></a>
                            <a href="./deleteOrder.php?id=' . $order['order_number'] . '"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                        ';
            }
            ?>
        </table>
    </main>
</body>

</html>
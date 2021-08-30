<!DOCTYPE html>
<html lang="pt_BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <main>
        <div class="nav-client">
            <input type="button" value="Cadastrar" class="btn-new" onclick="createOrder()">
            <input type="button" value="Voltar" class="btn-new" onclick="backHome()">
        </div>
        <table>
            <tr>
                <th>Número da Ordem</th>
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

            function formatterDate($date)
            {
                $formattedDate = date('d-m-Y', strtotime($date));
                $formattedDate = str_replace("-", "/", $formattedDate);
                return $formattedDate;
            }

            $select = $connection->query('select o.order_number, o.order_date, c.name_client, p.name_product, p.unitary_value, o.quantity, o.total from orders o join customers c on o.client_id = c.id join products p on o.product_id = p.id where o.deleted_at is null order by o.order_number');
            foreach ($select as $order) {
                echo  '
                    <tr>
                        <td> ' . $order['order_number'] . ' </td>
                        <td> ' . formatterDate($order['order_date']) . '</td>
                        <td> ' . $order['name_client'] .  '</td>
                        <td> ' . $order['name_product'] .  '</td>
                        <td> R$ ' . $order['unitary_value'] .  '</td>
                        <td> ' . $order['quantity'] .  '</td>
                        <td> R$ ' . $order['total'] .  '</td>
                        <td >
                            <div class="list-order">
                                <a href="./formUpdateOrder.php?id=' . $order['order_number'] . '"><i class="far fa-edit"></i></a>
                                <a href="./deleteOrder.php?id=' . $order['order_number'] . '"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                        ';
            }
            ?>
        </table>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="pt_BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php');
?>

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
                        <td> R$ ' . $product['unitary_value'] .  '</td>
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
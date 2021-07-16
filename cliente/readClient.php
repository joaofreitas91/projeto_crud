<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./style/index.css">
</head>

<body>

    <table class="tableClient">
        <tr>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php
        include_once('../php/connection.php');

        $select = $connection->query('SELECT * FROM cliente');
        foreach ($select as $client) {

            echo  '

        <tr>
            <th> ' . $client['nome_cliente'] . ' </th>
            <th> ' . $client['cpf'] . '</th>
            <th> ' . $client['email'] .  '</th>
            <th>
                <a href="./updateClient.php">Alterar</a>
                <a href="./deleteClient.php?id=' . $client['id'] . '">Excluir</a>
            </th>
        </tr>
    ';
        }
        ?>
    </table>
</body>

</html>
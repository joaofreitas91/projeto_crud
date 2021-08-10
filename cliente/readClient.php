<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/scripts.js"></script>
</head>

<body>
    <main>
        <div class="nav-client">
            <input type="button" value="Cadastrar" class="btn-new-client" onclick="cadClient()">
            <input type="button" value="Voltar" class="btn-new-client" onclick="backHome()">
        </div>
        <table>
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
            <td> ' . $client['nome_cliente'] . ' </td>
            <td> ' . $client['cpf'] . '</td>
            <td> ' . $client['email'] .  '</td>
            <td>
                <a href="./formUpdateClient.php?id=' . $client['id'] . '"><i class="far fa-edit"></i></a>
                <a href="./deleteClient.php?id=' . $client['id'] . '"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
    ';
            }
            ?>
        </table>
    </main>
</body>

</html>
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
            <input type="button" value="Cadastrar" class="btn-new" onclick="createClient()">
            <input type="button" value="Voltar" class="btn-new" onclick="backHome()">
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

            $customers = $connection->query('SELECT * FROM customers WHERE deleted_at is null');

            function retornarCPF($valor)
            {
                $cpf = $valor; //000.000.000-00

                $pattern = '/^([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{2})$/';
                $replacement = '$1.$2.$3-$4';
                $result = preg_replace($pattern, $replacement, $cpf); //000.000.000-00
                return $result;
            }

            foreach ($customers as $customer) {

                echo  '

        <tr>
            <td> ' . $customer['name_client'] . ' </td>
            <td> ' . retornarCPF($customer['cpf']) . '</td>
            <td> ' . $customer['email'] .  '</td>
            <td>
                <a href="./formUpdateClient.php?id=' . $customer['id'] . '"><i class="far fa-edit"></i></a>
                <a href="./deleteClient.php?id=' . $customer['id'] . '"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
    ';
            }
            ?>
        </table>
    </main>
</body>

</html>
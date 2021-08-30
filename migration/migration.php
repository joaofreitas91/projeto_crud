<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <main class="content-main" id="content-main">
        <div class="informations">

            <?php
            $hostname = 'localhost';
            $oldDatabaseName = 'old_database';
            $newDatabaseName = 'project_php';
            $user = 'root';
            $password = "";

            try {
                //old database
                $oldConnection = new PDO("mysql:host=$hostname;dbname=$oldDatabaseName", $user, $password);
                $oldConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //new database
                $newConnection = new PDO("mysql:host=$hostname;dbname=$newDatabaseName", $user, $password);
                $newConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $oldRegister = $oldConnection->query("SELECT * FROM orders");

                foreach ($oldRegister as $register) {
                    $insertClient = $newConnection->prepare('INSERT customers VALUES (DEFAULT, :name_client, :cpf, :email, DEFAULT) ');
                    $insertClient->execute([
                        ':name_client' => $register['name_client'],
                        ':cpf' => $register['cpf'],
                        ':email' => $register['email']
                    ]);

                    $insertProduct = $newConnection->prepare('INSERT products VALUES (DEFAULT, :name_product, :bar_code, :unitary_value, DEFAULT)');
                    $insertProduct->execute([
                        ':name_product' => $register['name_product'],
                        ':bar_code' => $register['bar_code'],
                        ':unitary_value' => $register['unitary_value']

                    ]);
                }
            } catch (PDOException $error) {
                // echo $error->getMessage();
            }
            try {
                //old database
                $oldConnection = new PDO("mysql:host=$hostname;dbname=$oldDatabaseName", $user, $password);
                $oldConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //new database
                $newConnection = new PDO("mysql:host=$hostname;dbname=$newDatabaseName", $user, $password);
                $newConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $oldRegister = $oldConnection->query("SELECT * FROM orders");

                foreach ($oldRegister as $register) {
                    $insertOrder = $newConnection->prepare(
                        'INSERT orders VALUES (:order_number, :order_date, :client_id, :product_id, :unitaryValue, :quantity, :total, DEFAULT)'
                    );

                    $resultQuery = $newConnection->query("SELECT id FROM customers WHERE cpf = " . $register["cpf"]);
                    $idClient;
                    foreach ($resultQuery as $result) {
                        $idClient = $result['id'];
                    }

                    $resultQuery = $newConnection->query("SELECT id FROM products WHERE bar_code = " . $register["bar_code"]);
                    $idProduct;
                    foreach ($resultQuery as $result) {
                        $idProduct = $result['id'];
                    }

                    $insertOrder->execute([
                        ":order_number" => $register['id'],
                        ":order_date" => $register['order_date'],
                        ":client_id" => $idClient,
                        ":product_id" => $idProduct,
                        ":unitaryValue" => $register['unitary_value'],
                        ":quantity" => $register['quantity'],
                        ":total" =>  $register['unitary_value'] * $register['quantity']
                    ]);
                }
                $protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

                unset($connection);
                echo "<div class='message-wrapper'>MIGRAÇÃO REALIZADA COM EXITO.</div>";

                $page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/index.php";
                header("Refresh:2; $page");
            } catch (PDOException $error) {
                $protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';

                unset($connection);
                echo "<div class='message-wrapper'>MIGRAÇÃO FALHOU!!! </div>";

                $page = $protocol . $_SERVER["HTTP_HOST"] . "/proj_php/index.php";
                header("Refresh:2; $page");
            }
            ?>
        </div>
    </main>
</body>

</html>
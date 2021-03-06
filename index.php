<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/scripts.js"></script>
    <title>CRUD | PHP</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="./client/readClient.php">
                        <p><i class="fas fa-user-friends"></i></p>
                        <p><span>Clientes</span></p>
                    </a>
                </li>
                <li>
                    <a href="./products/readProducts.php">
                        <p><i class="fas fa-box-open"></i></p>
                        <p><span>Produtos</span></p>
                    </a>
                </li>
                <li>
                    <a href="./order/readOrder.php">
                        <p><i class="fas fa-money-check-alt"></i></p>
                        <p><span>Pedidos</span></p>
                    </a>
                </li>
                <li onclick="goMigration(event)">
                    <div class="button-migration">
                        <p><i class="fas fa-exchange-alt"></i></p>
                        <p><span>Migração</span></p>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>
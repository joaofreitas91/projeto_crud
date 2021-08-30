<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD DO HTML -->
<?php
include_once('../layout/head.php')
?>

<body>
    <div class="cont-form">
        <h1 class="title-form">Cadastro de Cliente</h1>
        <form method="POST" action="./createClient.php" onsubmit="valida(event)" class="form">
            <label for="nome" class="label-form">Nome:</label>
            <input type="text" id="name_client" name="name_client" oninput="upperCase(event)" class="inp-form" required />

            <label for="cpf" class="label-form">CPF:</label>
            <input type="text" id="cpf" name="cpf" minlength="14" class="inp-form" required />

            <label for="email" class="label-form">Email:</label>
            <input type="email" id="email" name="email" class="inp-form" />
            <div class="btns-form">
                <input type="submit" value="Cadastrar" class="btn-form" />
                <input type="button" value="Voltar" class="btn-form" onclick="backClient()" />
            </div>
        </form>
    </div>

    <script>

    </script>
</body>

</html>
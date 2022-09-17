<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro - MYSQLI</title>
</head>

<div class="w3-center ">
    <br>
    <img src="image/banner.webp" style="width:15%" class="w3-circle w3-margin-top">
</div>
<br>
<br>
<br>
</section>

<body>
    <div class="w3-padding w3-display-middle">
        <?php
        include "conexaoBD.php";
        $sql = "INSERT INTO login (login, senha, nome)
        VALUES ('" . $_POST['txtLogin'] . "', '" . $_POST['txtSenha'] . "','" . $_POST['txtNome'] . "')";

        if ($conexao->query($sql) == TRUE) {
            echo ' <a href="usuario.php">
            <h1 class="w3-button w3-orange">Ação realizada com sucesso!</h1>
            </a>';
        } else {
            echo '<a href="usuario.php">
            <h1 class="w3-button w3-teal">ERRO! </h1>
            </a>';
        }
        $conexao->close();
        ?>
    </div>

</body>
</html>
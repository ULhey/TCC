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
<body>
    <section class="banner">
        <div class="w3-center ">
            <br>
            <img src="image/banner.webp" style="width:15%" class="w3-circle w3-margin-top">
        </div>
        <br>
        <br>
        <br>
    </section>
    <div class="w3-padding w3-display-middle">
        <?php
        require_once 'conexaoBD.php';
        $sql = "INSERT INTO mesa (numeroMesa, statusMesa, quantidade_assento)
        VALUES ('" . $_POST['txtNumero'] . "', '" . $_POST['txtSituacao'] . "','" . $_POST['txtQtd'] . "')";

        if ($conexao->query($sql) == TRUE) {
            echo ' <a href="mesas.php">
            <section class="mesa">
            <div class="container">
            <div class="titulo" >
            <h2 class="w3-button w3-orange">Ação realizada com sucesso!</h2>
            </div>
            </section>
            </a>';
        } else {
            echo '<a href="mesas.php">
            <h1 class="w3-button w3-orange">ERRO! </h1>
            </a>';
        }
        $conexao->close();
        ?>
    </div>

</body>
</html>
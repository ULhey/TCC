<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/scroll.css">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/mesas.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/mesas.css">
  <link rel="stylesheet" href="css/produto.css">
  <link rel="stylesheet" href="css/cardapio.css">
  <link rel="stylesheet" href="css/categoria.css">
  <link rel="stylesheet" href="css/pagamento.css">
  <link rel="stylesheet" href="css/usuario.css">
  <link rel="stylesheet" href="css/relatorio.css">
  <title>SystemGrill - Login</title>
  <div class="w3-center ">
    <br>
    <img src="image/banner.webp" style="width:15%" class="w3-circle w3-margin-top">
  </div>
  </section>
  <?php
  session_start();
  $nomeUsuario = $_POST['txtUsuario'];
  $senhaUsuario = $_POST['txtSenha'];
  $senhaUsuario = $_POST['txtSenha'];
  require_once "conexaoBD.php";

  $sql = "SELECT * FROM `usuario` WHERE nomeUsuario =  '" . $nomeUsuario . "';";

  $resultado = $conexao->query($sql);
  //echo $sql; 
  $linha = mysqli_fetch_array($resultado);
  if ($linha != null) {
    if ($linha['senhaUsuario'] == $senhaUsuario) {

      echo ' 
        <a href="principal.php"> 
        <section class="usuario">
        <div class="container">
        <div class="titulo">
       <h2 class="w3-button w3-orange">' . $linha['nomeUsuario'] . ', Seja bem-vindo!<br> Clique aqui para entrar no sistema.</h2>  
       </div>
       </div>
       </section>
       </a> 
       ';
      $_SESSION['logado'] = $nomeUsuario;
    }
  } else {
    echo ' 
       <a href="index.php"> 
       <section class="usuario">
       <div class="container">
       <div class="titulo">
       <h2 class="w3-button w3-orange">Login ou senha inválido!<br> Voltar</h2>
       </div> <!--titulo-->
       </div>
       </section>
      </a> 
      ';
  }
  $conexao->close();
  ?>
  </body>
</html>
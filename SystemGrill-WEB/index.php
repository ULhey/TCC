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
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4  w3-third " >

<style type="text/css">
a:link {
text-decoration:none;
}
a:visited {
text-decoration:none;
}
a:hover {
text-decoration:underline;
}

</style>
<div class="w3-center ">
    <br>
    <img src="image/banner.webp" style="width:60%" class="w3-circle w3-margin-top">
</div>

<form class="w3-container " action="loginAction.php" method="post"> 
    <div class="w3-section">
        <label style="font-weight: bold;">Usuário</label>
        <input class="w3-input w3-border w3-margin-bottom"  type="text" placeholder="Digite seu usuário..." name="txtUsuario" required>
        <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border" type="password" placeholder="Digite sua senha..." name="txtSenha" required>
        <button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit">LOGIN</button>
      
        </label>
    </div>
</form>
</div>
</body>
</html>
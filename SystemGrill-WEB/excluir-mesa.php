<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/tabela.css">
    <link rel="stylesheet" href="css/mesas.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Mesas</title>
</head>

<body>
    <header id="header">
        <nav>
            <div class="container">
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

                <ul class="nav-list">
                    <li class="links">
                        <a href="/principal.php">Início</a>
                    </li class="links">

                    <li class="links">
                        <a href="/mesas.php">Mesa</a>
                    </li>

                    <li class="links">
                        <a href="/produto.php">Produto</a>
                    </li>

                    <li class="links">
                        <a href="/cardapio.php">Cardápio</a>
                    </li>

                    <li class="links">
                        <a href="/categoria.php">Categoria</a>
                    </li>

                    <li class="links">
                        <a href="/pagamento.php">Pagamento</a>
                    </li>

                    <li class="links">
                        <a href="/usuario.php">Usuário</a>
                    </li>

                    <li class="links">
                        <a href="/relatorio.php">Relatório</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="banner">
            <div class="container">
                <img src="/image/banner.webp" alt="">
            </div>
        </section>

        <section class="mesas">
            <div class="container">
                <div class="titulo">
                    <span>-</span>
                    <h2>mesas</h2>
                    <span>-</span>
                </div>
                <!--titulo-->

                <div class="botoes-menu-mesas">
                    <div class="botoes-menu-mesas">
                        <a href="/incluir-mesa.php" class="btn-menu-mesas">Incluir</a>
                        <a href="/consultar-mesa.php" class="btn-menu-mesas">Consultar</a>
                    </div>
                </div>
                <div class="titulo">
                    <h2>EXLUIR MESA - ID: <?php echo " " . $_GET['id'] ?> </h2>
                </div>

                <form id="mesa" action="mesaexcluirAction.php" method='post'>

                    <input name="txtID" class="input-block" type="hidden" value="<?php echo $_GET['id'] ?>">
                    <br>

                    <div class="input-block">
                        <label style="font-weight: bold;">Número</label>
                        <input name="txtNumero" class="input-block" disabled value="<?php echo $_GET['numeroMesa'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <label style="font-weight: bold;">Situação</label>
                        <input name="txtSituacao" class="input-block" disabled value="<?php echo $_GET['statusMesa'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <label style="font-weight: bold;">Quantidade de assento</label>
                        <input name="txtQtd" class="input-block" disabled value="<?php echo $_GET['quantidade_assento'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <button type="submit">Excluir</button>
                    </div>
                </form>
            </div>
            <!--container-->
        </section>
    </main>

    <footer>
        <div class="texto-footer">
            <p>&copy; 2022</p>
            <p>SystemGrill</p>
            <p>ETEC - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

    <i class="fa-solid fa-arrow-up" onclick="backToTop()" id="back-to-top"></i>

    <script src="js/jquery-min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>
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
    <link rel="stylesheet" href="css/produto.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Produto</title>
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

        <section class="produto">
            <div class="container">
                <div class="titulo">
                    <span>-</span>
                    <h2>produto</h2>
                    <span>-</span>
                </div>
                <!--titulo-->

                <div class="botoes-menu-produto">
                    <div class="botoes-menu-produto">
                        <a href="/incluir-produto.php" class="btn-menu-produto">Incluir</a>
                        <a href="/consultar-produto.php" class="btn-menu-produto">Consultar</a>
                    </div>
                </div>
                <div class="titulo">
                    <h2>EXLUIR PRODUTO - ID: <?php echo " " . $_GET['id'] ?> </h2>
                </div>

                <form id="produto" action="produtoexcluirAction.php" method='post'>

                    <input name="txtID" class="input-block" type="hidden" value="<?php echo $_GET['id'] ?>">
                    <br>

                    <div class="input-block">
                        <label style="font-weight: bold;">Nome</label>
                        <input name="txtNome" class="input-block" disabled value="<?php echo $_GET['descricaoProduto'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <label style="font-weight: bold;">Categoria</label>
                        <input name="txtCat class=class=" input-block" disabled value="<?php echo $_GET['idCategoria'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <label style="font-weight: bold;">Fornecedor</label>
                        <input name="txtFornecedor" class="input-block" disabled value="<?php echo $_GET['fornecedor'] ?>">
                        <br>
                    </div>

                    <div class="input-block">
                        <label style="font-weight: bold;">Validade</label>
                        <input name="txtValidade" class="input-block" disabled value="<?php echo $_GET['validade'] ?>">
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
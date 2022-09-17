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
    <link rel="stylesheet" href="css/pagamento.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Pagamento</title>
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

        <section class="pagamento">
            <div class="container">
                <div class="titulo">
                    <span>-</span>
                    <h2>pagamento</h2>
                    <span>-</span>
                </div>
                <!--titulo-->

                <div class="botoes-menu-pagamento">
                    <div class="botoes-menu-pagamento">
                        <a href="/consultar-pagamento.php" class="btn-menu-pagamento">Consultar</a>
                    </div>
                </div>

                <?php
                include "conexaoBD.php";
                echo '
                <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-orange">
                        <th>Pedido</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Total</th>
                        <th>Pagar</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM itempedido ";
                $resultado = $conexao->query($sql);
                if ($resultado != null)
                    foreach ($resultado as $linha) {
                        echo '<tr>';
                        echo '<td align="center">' . $linha['idPedido'] . '</td>';
                        echo '<td align="center">' . $linha['idProduto'] . '</td>';
                        echo '<td align="center">' . $linha['qtdProduto'] . '</td>';
                        echo '<td align="center">' . $linha['valor_total'] . '</td>';
                        echo '<td align="center"><a href=efetuar-pagamento.php?id=' . $linha['idPedido'] . '&idProduto=' . $linha['idProduto'] . '&qtdProduto=' . $linha['qtdProduto'] . '&valor_total=' . $linha['valor_total'] . '"><i class="fa fa-credit-card w3-large w3-text-blue""></i></a></td></td>';
                        echo '</tr>';
                    }
                echo '
                    </table>
                </div>';
                $conexao->close();
                ?>
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
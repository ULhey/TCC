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

                <?php
                include "conexaoBD.php";
                echo '
                <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-orange">
                        <th>Código</th>
                        <th>Número</th>
                        <th>Situação</th>
                        <th>Quantidade de assento</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM mesa";
                $resultado = $conexao->query($sql);
                if ($resultado != null)
                    foreach ($resultado as $linha) {
                        echo '<tr>';
                        echo '<td align="center">' . $linha['idMesa'] . '</td>';
                        echo '<td align="center">' . $linha['numeroMesa'] . '</td>';
                        echo '<td align="center">' . $linha['statusMesa'] . '</td>';
                        echo '<td align="center">' . $linha['quantidade_assento'] . '</td>';
                        echo '<td align="center"><a href="excluir-mesa.php?id=' . $linha['idMesa'] . '&numeroMesa=' . $linha['numeroMesa'] . '&statusMesa=' . $linha['statusMesa'] . '&quantidade_assento=' . $linha['quantidade_assento'] . '"><i class="fa fa-user-times w3-large w3-text-blue"></i> </a></td></td>';
                        echo '<td align="center"><a href="alterar-mesa.php?id=' . $linha['idMesa'] . '&numeroMesa=' . $linha['numeroMesa'] . '&statusMesa=' . $linha['statusMesa'] . '&quantidade_assento=' . $linha['quantidade_assento'] . '"><i class="fa fa-refresh w3-large w3-text-blue""></i></a></td></td>';
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
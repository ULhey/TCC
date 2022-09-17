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
    <link rel="stylesheet" href="css/usuario.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Usuario</title>
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

        <section class="usuario">
            <div class="container">
                <div class="titulo">
                    <span>-</span>
                    <h2>usuario</h2>
                    <span>-</span>
                </div>
                <!--titulo-->

                <div class="botoes-menu-usuario">
                    <div class="botoes-menu-usuario">
                        <a href="/incluir-usuario.php" class="btn-menu-usuario">Incluir</a>
                        <a href="/consultar-usuario.php" class="btn-menu-usuario">Consultar</a>
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
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Função</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM usuario";
                $resultado = $conexao->query($sql);
                if ($resultado != null)
                    foreach ($resultado as $linha) {
                        echo '<tr>';
                        echo '<td align="center">' . $linha['idUsuario'] . '</td>';
                        echo '<td align="center">' . $linha['nomeUsuario'] . '</td>';
                        echo '<td align="center">' . $linha['email'] . '</td>';
                        echo '<td align="center">' . $linha['cpf'] . '</td>';
                        echo '<td align="center">' . $linha['cargoUsuario'] . '</td>';
                        echo '<td align="center"><a href="excluir-usuario.php?id=' . $linha['idUsuario'] . '&nomeUsuario=' . $linha['nomeUsuario'] . '&email=' . $linha['email'] . '&cpf=' . $linha['cpf'] . '&cargoUsuario=' . $linha['cargoUsuario'] . '"><i class="fa fa-user-times w3-large w3-text-blue"></i> </a></td></td>';
                        echo '<td align="center"><a href="alterar-usuario.php?id=' . $linha['idUsuario'] . '&nomeUsuario=' . $linha['nomeUsuario'] . '&email=' . $linha['email'] . '&cpf=' . $linha['cpf'] . '&cargoUsuario=' . $linha['cargoUsuario'] . '"><i class="fa fa-refresh w3-large w3-text-blue""></i></a></td></td>';
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
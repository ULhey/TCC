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
    <link rel="stylesheet" href="css/devs.css">

    <script src="https://kit.fontawesome.com/9bb6c30290.js" crossorigin="anonymous"></script>
    <title>SystemGrill - Principal</title>
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
                <img class="banner-principal" src="/image/banner-principal.jpeg" alt="">
            </div>
        </section>

        <section class="desenvolvedores">
            <div class="container">
                <h2>Conheça nossa equipe!</h2>

                <div class="encapsular">
                    <div class="devs">
                        <div class="info-devs">
                            <div class="foto-dev">
                                <img src="/image/victoria.jpg" alt="">
                            </div>
                            <p>Victoria Silva</p>
                            <span>Desenvolvedora</span>
                        </div>

                        <div class="info-devs">
                            <div class="foto-dev">
                                <img src="/image/mateus.jpg" alt="">
                            </div>
                            <p>Mateus Lima</p>
                            <span>Desenvolvedor</span>
                        </div>

                        <div class="info-devs">
                            <div class="foto-dev">
                                <img src="/image/wellen.jpg" alt="">
                            </div>
                            <p>Wellen Siva</p>
                            <span>Desenvolvedora</span>
                        </div>
                    </div>

                    <div class="scrum">
                        <div class="info-devs">
                            <div class="foto-dev">
                                <img src="/image/beatriz.jpeg" alt="">
                            </div>
                            <p>Beatriz Ribeiro</p>
                            <span>Scrum Master</span>
                        </div>

                        <div class="info-devs">
                            <div class="foto-dev">
                                <img src="/image/dilma.jpg" alt="">
                            </div>
                            <p>Dilma Isidoro</p>
                            <span>Product Owner</span>
                        </div>
                    </div>
                </div>
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Importação dos Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Importação do arquivo de customização -->
    <link rel="stylesheet" href="assets/css/custumize.css">
</head>

<body>

    <header>
        <!-- Barra de navegação mobile e tablete -->
        <nav style="background-color: #5e2129;">
            <div class="container nav-wrapper">
                <a href="#" class="brand-logo">Garrafeira</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <form action="" method="GET">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">search</i>
                                <input class="white-text" id="icon_prefix" type="text" class="validate" placeholder="Buscar por vinhos">
                            </div>
                        </form>
                    </li>
                    <li><a href="sass.html"><i class="material-icons" style="color:#ffd700;">add_shopping_cart</i></a></li>
                    <li>|</li>
                    <li><a href="login.php">Entrar</a></li>
                    <li><a class="btn" href="sass.html" style="border-radius: 20px; background-color: #c8a2c8;">Cadastrar</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="">
        <?= $this->section('content') ?>
    </main>

    <footer class="page-footer" style="background-color: #5e2129;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Sistema de Garrafeira</h5>
                    <p class="grey-text text-lighten-4">Sistema de venda e encomenda de bebidas alcoolicas e gaseficadas.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociais</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" target="_blank" href="https://www.facebook.com/marcelina.alfredocelina">
                                <i class="material-icons">facebook</i>
                                Marcelina da Silva</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="#!">
                                <i class="material-icons">facebook</i>
                                Josué Manuel
                            </a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">
                                <i class="material-icons">facebook</i>
                                Paulo
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2024 Copyright Text

            </div>
        </div>
    </footer>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
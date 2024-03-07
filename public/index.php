<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garrafeira</title>
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
                    <li><a href="sass.html">Entrar</a></li>
                    <li><a class="btn" href="sass.html" style="border-radius: 20px; background-color: #c8a2c8;">Cadastrar</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="">
        <div class="row">
            <!-- Barra lateral para pesquisa filtarada -->
            <div class="container col s12 m4">
                <div class="" style="width:100%; padding: 5%;">

                    <h4>Filtros</h4>
                    <hr>

                    <form class="container" action="" method="get">
                        <h6>Produtos</h6>
                        <p>
                            <label>
                                <input type="checkbox" name="txt_filtro_por_vinho" class="filled-in" checked="" />
                                <span>Vinhos</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="filled-in" name="txt_filtro_por_cerveja" type="checkbox" checked="" />
                                <span>Cervejas</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="filled-in" name="txt_filtro_whisky" type="checkbox" checked="" />
                                <span>Whisky</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="filled-in" name="txt_filtro_por_gasosa" type="checkbox" checked="" />
                                <span>Gasosas</span>
                            </label>
                        </p>
                    </form>
                </div>

            </div>
            <!-- Area das Garrafas -->
            <div class="col s12 m8">
                <div class="row">
                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/whisky.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/whisky.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/whisky.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/vinho.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/vinho.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão -->
                    <div class="container col s12 m4">
                        <div class="card small">
                            <img class="responsive-img" src="assets/uploads/vinho.png" style="width: 100%;">

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">remove_red_eye</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">airplay</i>
                                        </a>
                                    </div>
                                    <div class="col s3">
                                        <a href="">
                                            <i class="material-icons" style="color:#111;">add_shopping_cart</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fim da row -->
            </div>


        </div>
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
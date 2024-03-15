<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="public/assets/css/style.css">
    <!-- Importação do CSS do Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/14d67b7e07.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-danger">
            <div class="container">
                <!-- Logotipo e links à esquerda -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="caminho_para_seu_logo.png" alt="Logo" height="30">
                    </a>

                    <ul class="navbar-nav mr-auto"> <!-- mr-auto para ajustar à esquerda -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Incio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                    </ul>
                </div>

                <!-- Formulário de pesquisa e botões à direita -->
                <div class="d-flex align-items-center">
                    <form class="d-flex me-2">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    </form>

                    <div class="nav-item">
                        <span class="navbar-text mx-2">|</span> <!-- Separador -->
                        <button class="btn btn-outline-primary me-2" type="button">Entrar</button>
                        <button class="btn btn-outline-danger" type="button">Cadastrar</button>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <!-- Conteúdo principal -->
    <main class="container">
        <?= $this->section('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-danger text-light text-center fixed-bottom py-3">
        <div class="container">
            <span>&copy; 2024 Garrafeiras Vinho D' Ouro</span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Importação do JS do Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
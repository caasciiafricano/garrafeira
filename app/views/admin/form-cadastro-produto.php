<?php $this->layout('admin/template', ['title' => 'Cadastrar Garrafa']) ?>

<section class="row">
    <!-- Aside -->
    <aside class="col-sm-12 col-md-2 py-5">
        <h3>Admin</h3>
        <hr class="divider">
    </aside>

    <!-- Conteúdo Principal -->
    <div class="col-sm-12 col-md-10 py-5">

        <h3>Cadastrar nova garrafa</h3>
        <hr>

        <div class="d-flex justify-content-center">

            <form action="/admin/produto/cadastrar" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <div class="card p-5" style="width: 200px; height: 150px">
                                    <img class="w-100" src="" alt="foto da garrafa">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="img-garrafa" id="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <div class="mb-2">
                            <label for="nome-garrafa">Nome</label>
                            <input class="form-control" type="text" name="nome-garrafa">
                        </div>
                        <div class="mb-2">
                            <label for="origem-garrafa">Origem</label>
                            <input class="form-control" type="text" name="origem-garrafa">
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <label for="ano-garrafa">Ano</label>
                                    <input class="form-control" type="text" name="ano-garrafa">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="preco">Preço</label>
                                    <input class="form-control" type="number" type="text" value="1000" name="preco" min="1000" step="100">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="quantidade">Quantidades</label>
                                    <input class="form-control" type="number" name="quantidade" value="1" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-danger">Registar</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>


</section>
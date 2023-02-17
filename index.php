<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Acampamento Ninivi</title>

    <!-- Inclui o CSS do Bootstrap -->
    <link rel="stylesheet" href="app/views/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>


    <link rel="icon" type="image/svg+xml" href="app/views/assets/image/favicon.svg">


</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Menu lateral aqui -->
            <?php include('app/views/menu.php'); ?>

        </div>
        <div class="col-md-9">
            <!-- Conteúdo aqui -->
            <div class="text-center my-4">
                <h1>Seja bem-vindo ao acampamento Ninivi da nossa comunidade!</h1>
            </div>
            <?php
            if (true) {
                echo '<div class="container">
                <div class="row justify-content-center" style="height: 90vh;">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card" style="width: 100%;">
                            <img src="/app/views/assets/image/logo.png" class="card-img-top" alt="Logo"
                                 style="max-width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-center "
                                    style="color: yellowgreen; font-size: 1.8rem; font-weight: bold;">Olá amiguinho, seja
                                    bem-vindo a esta aventura!</h5>
                                <p class="card-text text-center" style="font-size: 1.1rem;">Você está prestes a viver
                                    momentos incríveis em nosso acampamento. Para finalizar o seu cadastro, clique no
                                    botão abaixo:</p>
                                <a href="app/views/registroFinal.php" style="text-decoration: none;">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-warning btn-lg" type="button">Concluir cadastro para o
                                            acampamento
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } else if (true) {
                echo '<div class="container">
                <div class="row justify-content-center" style="height: 90vh;">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card" style="width: 100%;">
                            <img src="/app/views/assets/image/logo.png" class="card-img-top" alt="Logo"
                                 style="max-width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-center"
                                    style="color: green; font-size: 1.8rem; font-weight: bold;">Junte-se a nós no
                                    acampamento de aventuras!</h5>
                                <p class="card-text text-center" style="font-size: 1.1rem;">Prepare-se para viver
                                    experiências incríveis e inesquecíveis no meio da natureza. Não perca essa chance de
                                    fazer novos amigos, descobrir seus limites e se divertir muito!</p>
                                <a href="app/views/registroFinal.php" style="text-decoration: none;">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success btn-lg" type="button">Inscreva-se no acampamen
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
            ?>


        </div>
    </div>
</div>

<!-- Inclui o JavaScript do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..."></script>

<?php include('app/views/footer.php'); ?>


</body>
</html>

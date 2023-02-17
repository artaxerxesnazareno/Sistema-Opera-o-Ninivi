<!DOCTYPE html>
<html>
<head>
    <title>Sobre - Acampamento NInivi</title>

    <!-- Inclui o CSS do Bootstrap -->
    <link rel="stylesheet" href="app/views/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>


    <link rel="icon" type="image/svg+xml" href="assets/image/favicon.svg">


</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Menu lateral aqui -->
            <?php include('menu.php'); ?>

        </div>
        <div class="col-md-9">
            <!-- Conteúdo aqui -->
            <div class="text-center my-4">
                <h1>Seja bem-vindo ao acampamento Ninivi da nossa comunidade!</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Total de inscritos no acampamento</h5>
                            <p class="card-text display-4">100</p>
                        </div>
                        <div class="card-footer bg-primary text-white">
                            <a href="#" class="btn btn-lg btn-light">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Dias restantes para o acampamento</h5>
                            <p class="card-text display-4">20</p>
                        </div>
                        <div class="card-footer bg-secondary text-white">
                            <a href="#" class="btn btn-lg btn-light">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <p class="lead">Seja bem-vindo ao acampamento, um lugar de renovação e encontro com a natureza. Aqui,
                    você terá a oportunidade de se conectar consigo mesmo e com o divino, em um ambiente acolhedor e
                    cheio de paz.</p>
                <p class="lead">Acreditamos que essa experiência pode transformar vidas e trazer mais harmonia ao mundo.
                    Por isso, desejamos que você aproveite cada momento e leve consigo aprendizados valiosos e
                    lembranças inesquecíveis.</p>
            </div>
        </div>

    </div>
</div>


<!-- Inclui o JavaScript do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..."></script>
<?php include('footer.php'); ?>

</body>
</html>

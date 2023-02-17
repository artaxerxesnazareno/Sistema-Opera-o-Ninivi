<!DOCTYPE html>
<html>
<head>
    <title>Finalizar Cadastro - Acampamento NInivi</title>

    <!-- Inclui o CSS do Bootstrap -->
    <link rel="stylesheet" href="app/views/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>


    <link rel="icon" type="image/svg+xml" href="assets/image/favicon.svg">


</head>
<body>


<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 120vh;">
        <div class="col-10 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <img
                            src="../views/assets/image/logo.png"
                            alt="logo"
                            class="rounded mx-auto d-block" width="150"
                    />
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Complete seu cadastro para se juntar à nossa aventura!</h5>
                    <form>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone"  placeholder="xxx xxx xxx">
                        </div>
                        <div class="mb-3">
                            <label for="nomeEmergencia" class="form-label">Nome do contato de emergência</label>
                            <input type="text" class="form-control" id="nomeEmergencia" placeholder="Digite o nome da pessoa que deve ser contatada em caso de emergência">
                        </div>
                        <div class="mb-3">
                            <label for="telefoneEmergencia" class="form-label">Telefone do contato de emergência</label>
                            <input type="tel" class="form-control" id="telefoneEmergencia" placeholder="xxx xxx xxx">
                        </div>
                        <div class="mb-3">
                            <label for="doenca" class="form-label">Você possui alguma doença ou alergia?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="doenca" id="doencaSim" value="sim">
                                <label class="form-check-label" for="doencaSim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="doenca" id="doencaNao" value="nao">
                                <label class="form-check-label" for="doencaNao">
                                    Não
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="medicamentos" class="form-label">Se sim, quais medicamentos você utiliza?</label>
                            <textarea class="form-control" id="medicamentos" rows="3" placeholder="Digite os medicamentos que utiliza, separados por vírgulas"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

</body>
</html>
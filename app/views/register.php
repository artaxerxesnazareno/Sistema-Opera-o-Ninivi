<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Cadastrar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>


    <link rel="icon" type="image/svg+xml" href="assets/image/favicon.svg">


</head>

<body>
<div class="d-flex align-items-center" style="height: 100vh;">
    <div class="mx-auto col-md-6">
        <div class="card">
            <div class="card-header">
                <img
                        src="../views/assets/image/logo.png"
                        alt="logo"
                        class="rounded mx-auto d-block" width="150"
                />
            </div>

            <div class="card-body">
                <h5 class="card-title">Cadastro</h5>
                <form action="../Controller/UsuarioController.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha"
                               placeholder="Digite sua senha">
                    </div>
                    <div class="mb-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <div>
                            <label for="homem">Homem</label>
                            <input type="radio" name="genero" id="homem" value="M">
                            <label for="mulher">Mulher</label>
                            <input type="radio" name="genero" id="mulher" value="F">
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data-nascimento">
                        </div>
                        <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

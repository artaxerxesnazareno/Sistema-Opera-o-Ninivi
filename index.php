<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center">IDENTIFICAÇÃO DO CLUBE</h2>
    <form>
        <div class="form-group">
            <label for="clube">CLUBE:</label>
            <input type="text" class="form-control" id="clube">
        </div>
        <div class="form-group">
            <label for="igreja">IGREJA:</label>
            <input type="text" class="form-control" id="igreja">
        </div>
        <div class="form-group">
            <label for="distrito">DISTRITO:</label>
            <input type="text" class="form-control" id="distrito">
        </div>
        <div class="form-group">
            <label for="regiao">REGIÃO:</label>
            <input type="text" class="form-control" id="regiao">
        </div>
        <div class="form-group">
            <label for="directorClube">DIRECTOR DO CLUBE:</label>
            <input type="text" class="form-control" id="directorClube">
        </div>
        <div class="form-group">
            <label for="tel">TEL:</label>
            <input type="text" class="form-control" id="tel">
        </div>
        <div class="form-group">
            <label for="dataInscricao">DATA DE INSCRIÇÃO:</label>
            <input type="text" class="form-control" id="dataInscricao" placeholder="__ / __ / 2023">
        </div>
        <h2 class="text-center">SOBRE O CLUBE</h2>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="primeiroCampori">
            <label class="form-check-label" for="primeiroCampori">Primeiro Campori do seu Clube?</label>
        </div>
        <div class="form-group">
            <label for="desbravadores">Quantos Desbravadores inscritos? (10 aos 15 anos de idade ):</label>
            <input type="text" class="form-control" id="desbravadores">
        </div>
        <div class="form-group">
            <label for="conselheiros">Quantos conselheiros inscritos? (Comprovados por acta):</label>
            <input type
            <input type="text" class="form-control" id="conselheiros">
        </div>
        <div class="form-group">
            <label for="acampantes">Quantos Acampantes externos inscritos? (Conforme orientação):</label>
            <input type="text" class="form-control" id="acampantes">
        </div>
        <div class="form-group form-check
          <input type="checkbox" class="form-check-input" id="homemSeguranca">
        <label class="form-check-label" for="homemSeguranca">Tem o homem da segurança interna? (Conforme orientação)</label>
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="pessoalCozinha">
    <label class="form-check-label" for="pessoalCozinha">PESSOAL DA COZINHA (Conforme orientação)</label>
</div>
<div class="form-group">
    <label for="totalInscritos">TOTAL DE INSCRITOS PARA O CAMPORI:</label>
    <input type="text" class="form-control" id="totalInscritos">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

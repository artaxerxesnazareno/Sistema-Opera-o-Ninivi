<?php


use app\models\UsuarioDAO;

include_once ('../../config/Conexao.php');
//require_once "../models/Usuario.php";
require_once ('../models/Usuario.php');
require_once ('../models/UsuarioDAO.php');


$cnx = \config\Conexao::getInstance();

//var_dump($cnx);
function cadastrarUsuario(){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $dataNascimento = $_POST['data_nascimento'];
   $genero = $_POST['genero'];

    $user = new Usuario( $nome,$senha,$email,$dataNascimento);

    UsuarioDAO::salvarUsuario($user);


   header("Location: /index.php");
}


if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST["cadastrar"])){
    cadastrarUsuario();
}


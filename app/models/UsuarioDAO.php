<?php


namespace app\models;

use conexao1;
use config\Conexao;

require_once ('../../config/Conexao1.php');


class UsuarioDAO
{
    public static function salvarUsuario($usuario)
    {
        $cnx = Conexao::getInstance();
        $dataNascimento = mysqli_real_escape_string($cnx, $usuario->getDataNascimento());
        $nome = mysqli_real_escape_string($cnx, $usuario->getNome());
        $senha = mysqli_real_escape_string($cnx, $usuario->getSenha());
        $email = mysqli_real_escape_string($cnx, $usuario->getEmail());
        $genero = mysqli_real_escape_string($cnx, $usuario->getGenero());

        $sql = "insert into `usuario` (`data_nascimento`, `nome`, `senha`) values ('$dataNascimento','$nome','$senha')";

        $result = mysqli_query($cnx, $sql);
        if (!$result) {
            echo 'Erro na query: ' . mysqli_error($cnx);
        } else {
            echo "<script>
                     alert('Usuário cadastrado com sucesso!');
                </script>";
        }
    }
    public function updateUsuario($usuario){

    }
}

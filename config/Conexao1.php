<?php

if(!isset($_POST)){
    header("Location: ../index.php"); exit;
}

class conexao1{

    public function cnxb(){
        return mysqli_connect('127.0.0.1', 'root', 'Capricornioesmeralda#1', 'ecomerce');
    }
}

$conect = new conexao1;
$cnx = $conect->cnxb();


?>

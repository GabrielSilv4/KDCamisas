<?php

function conexao() {

    $servidor = "localhost";
    $nomebanco = "camisas";
    $usuario = "";
    $senha = "";

// Criando conexão com o bd
    $conn = new mysqli($servidor, $usuario, $senha, $nomebanco);

// Checando Conexão
    if ($conn->connect_error) {
        header("location:../index.php");
    } else
        return $conn;
}

?>



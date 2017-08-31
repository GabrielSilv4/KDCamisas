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
        echo"Ocorreu um erro na conexão com o banco de dados";
        exit;
        
    } else
        return $conn;
}

?>



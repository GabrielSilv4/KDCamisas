<?php



// Cadastrar Terno
function cadastrarTerno($descricao ) {
    $conn = conexao();
    $sql = "INSERT INTO terno(descricao) VALUES('" . $descricao . "')";
                
    if ($conn->query($sql) == TRUE) {
        Alert("Terno cadastrado com sucesso", "success");
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


// Editar Terno
function editarTerno($id_terno, $descricao) {
    $conn = conexao();
       
    $sql = " UPDATE terno SET  descricao='" . $descricao . "' WHERE id_terno= " . $id_terno;    

    if ($conn->query($sql) === TRUE) {
        Alert("Dados atualizados com sucesso", "success");
        echo "<a href='".$_SERVER['HTTP_REFERER']."'> Voltar a tela principal</a>"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}


// Selecionar primeiro o terno ao qual pertence a camisa depois selecionar a camisa
function excluirTerno($id_terno, $id_camisa){

    $conn = conexao();
   
    // Primeiro Deletar todas as camisas pertencentes a este terno
    $sql = "DELETE FROM camisa WHERE id_terno=" .$id_terno;
    $conn->query($sql);
    
    // Após a exclusão das camisas deletar o terno
    $sqlTerno = "DELETE FROM terno WHERE id_terno=" .$id_terno;
    $conn->query($sqlTerno);
    
    $conn->close();

}

?>



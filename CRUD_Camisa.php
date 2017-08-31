<?php



// Cadastrar Camisa
function cadastrarCamisa($num_camisa, $status_camisa, $terno) {
    $conn = conexao();
    $sql = "INSERT INTO camisa(num_camisa, status, id_terno) 
            VALUES('" . $num_camisa . "','" . $status . "','" . $id_terno . "' )";
                
    if ($conn->query($sql) == TRUE) {
        Alert("Camisa cadastrada com sucesso", "success");
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}




// Editar Camisa
function editarCamisa($status, $num_camisa, $id_terno, $id_camisa) {
    $conn = conexao();
    
    
    $sql = " UPDATE camisa SET  num_camisa='" . $num_camisa . "', status='" . $status . 
            "' WHERE id_terno= " . $id_terno . "AND id_camisa= " . $id_camisa;    

    if ($conn->query($sql) === TRUE) {
        Alert("Oba!", "Dados atualizados com sucesso", "success");
        echo "<a href='".$_SERVER['HTTP_REFERER']."'> Voltar a lista de assuntos</a>"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}


// Selecionar primeiro o terno ao qual pertence a camisa depois selecionar a camisa
function excluirCamisa($id_terno, $id_camisa){

    $conn = conexao();
    $sql = "DELETE FROM camisa WHERE id_terno=" .$id_terno. "AND id_camisa=" .$id_camisa;
  
    $conn->query($sql);
    $conn->close();

}

?>

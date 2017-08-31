<?php



// Cadastrar Camisa
function cadastrarCamisa($num_camisa, $status_camisa, $terno) {
    $conn = conexao();
    $sql = "INSERT INTO camisa(Numero_Camisa, Status_Camisa, Terno) 
            VALUES('" . $num_camisa . "','" . $status_camisa . "','" . $terno . "' )";
                
    if ($conn->query($sql) == TRUE) {
        Alert("Camisa cadastrada com sucesso", "success");
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


function listarCamisa($id_terno, $id_camisa) {
    $conn = conexao();
    $result = mysqli_query($conn, "Select * from camisa WHERE id_terno =".$id_terno);
    
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            echo"<tr><td>" . $row['nome'] . "</td>";
            echo"<td>" . $row['descricao'] . "</td>";
            echo"<td><a href=ASS_editar.php?id=" . $row['id'] . "><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                        <a onclick='return confirmar();' href=ASS_Excluir.php?id=" . $row['id'] . "><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
        }
    }
    $conn->close();
}

// Selecionar primeiro o terno ao qual pertence a camisa depois selecionar a camisa

function excluirCamisa($id_terno, $id_camisa){

    $conn = conexao();
    $sqlt = "SELECT FROM terno WHERE id=" .$id_terno;
    
    $sql = "DELETE FROM disciplina WHERE id=" . $id;
    $conn->query($sql);
    $conn->close();

}


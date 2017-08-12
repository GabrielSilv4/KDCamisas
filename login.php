<html>
    <head>
        <title>Tela_Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="caixa">
            <form action="" method="post" enctype="multipart/form-data">      
                <span>Login: </span><input type="text" name="login" class="txt"> </br>
                <span>Senha: </span><input type="password" name="senha" class="txt">
                <input type="submit" value="Entrar" name="botao" id="btn">
            </form>
            <?php 
                require_once './projetec/CRUD.php';
                if(isset($_POST["botao"])){
                    logar($_POST["login"],$_POST["senha"]);
                }
            ?>
        </div>
    </body>
</html>

<style>
    
    #caixa{
    border: solid 1px;
    width: 220px;
    height: 120px;
    margin-left: 40%;
    margin-right: 40%;
    margin-top: 25%;
    border-radius: 11px;
    padding: 11mm;
    background-color: white;
}
#caixa span{
    font-size: 23px;    
}
.txt{
    height: 22px;
    width: 210px;
    border-radius: 8px;
    margin-bottom: 5px;
}

#btn{
    background-color: gray;
    height: 30px;
    width: 65px;
}

</style>
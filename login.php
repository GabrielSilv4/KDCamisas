

<html>
    <head>
        <title>Tela_Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href='C:\xampp\htdocs\KDCamisas\CSS\EstiloLogin.css'/>
    </head>
    <body>
        <div id="caixa">
            <form action="" method="post" enctype="multipart/form-data">      
                <span>Login: </span><input type="text" name="login" class="txt"> </br>
                <span>Senha: </span><input type="password" name="senha" class="txt">
                <input type="submit" value="Entrar" class="button" name="botao"/> </br>
				<input type="submit" value="Novo Usuario"  class="button" name="botao2"/> </br>
            </form>
            <?php 
   
                if(isset($_POST["botao"])){
                    logar($_POST["login"],$_POST["senha"]);
                }
				if(isset($_POST["botao2"])){
                    href='C:\xampp\htdocs\KDCamisas\CadastrarUsuario.html';
                }
            ?>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tela de login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>	

<body>
	<legend><h2>Tela de Login</h2></legend>
    <?php	
   // $login = "Lucas";
   //$senha = "123456";

    if(isset($_POST["login"])){
    //        echo $_POST["login"] . "<br>";
    //        echo $_POST["senha"];
        if($_POST["login"] == $login and $_POST["senha"] == $senha){
            echo "Login efetuado com sucesso";
        }else{
            echo "Login ou senha inválido";
        }
    }

    ?>
    <form method="post">
		<fieldset>
			<label for="name">Login: </label>
			<input type="text" name="login"><br>
			<label for="name">Senha: </label>
			<input type="password" name="senha">
			<br>	
			<input type="submit" value="Logar">
			<br>
			<a href="form.php">Cadastrar</a>
		</fieldset>	
    </form>
	
</body>


</html>
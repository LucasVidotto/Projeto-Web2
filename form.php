<?php
include_once 'banco.php';
?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
 
        <title>Cadastro de Usuário</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">

		
		
    </head>
 
    <body>
		
 
        <legend><h2>Cadastro de Usuário</h2></legend>
         
        <form action="incluir.php"  method="post" >
			<fieldset>
				<label for="name">Nome: </label>
				<br>	
				<input type="text" name="nome" id="name">
	 
				<br><br>
				
				<label for="name">Sobrenome: </label>
				<br>
				<input type="text" name="sobrenome" id="name">
	 
				<br><br>
				
				<label for="name">Login: </label>
				<br>
				<input type="text" name="login" id="name">
	 
				<br><br>
				
				<label for="name">Senha: </label>
				<br>
				<input type="password" name="senha" id="name">
	 
				<br><br>
				
				<label for="name">Confirmar Senha: </label>
				<br>
				<input type="password" name="confsenha" id="name">
	 
				<br><br>
				
				<label for="email">Perfil lattes: </label>
				<br>
				<input type="text" name="lattes" id="email">
	 
				<br><br>
				 
				Tipo Usuário:
				<br>
				<input type="checkbox" name="gender" id="gener_m" value="m">
				<label for="gener_m">Administrador </label>
				 
				<br><br>
				Status:
				<br>
				<input type="checkbox" name="gender" id="gener_m" value="m">
				<label for="gener_m">Ativo </label>
				  
				<br><br>
				<input type="submit" value="Cadastrar">
			</fieldset>
        </form>
 
    </body>
</html>
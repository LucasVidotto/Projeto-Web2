<?php
	include_once 'banco.php';

	$nome = $_POST["nome"];
	$sbnome = $_POST["sobrenome"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$resultado = $mysqli->query("INSERT INTO usuarios (nome, sobrenome, login, senha)  VALUES ('$nome','$sbnome',$login', '$senha')");
	//$resultado = $mysqli->query("INSERT INTO usuarios (nome, sobrenome, login, senha)  VALUES ('Vidotto','Vidotto','vidotto', '123')");


$mysqli->close(); 
		
?>	
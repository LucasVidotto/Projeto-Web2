<?php

public function login($login,$senha) { 

$query = "SELECT \* FROM Usuarios WHERE login = :login AND Senha = :senha";

$statement = $this->con->prepare($query);
$statement->bindValue(":login",$login); 
$statement->bindValue(":senha",$senha);

$statement->execute(); 
$usuario = $statement ->fetchObject(''); 
return $usuario; 
}

?>
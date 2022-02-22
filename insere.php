
<?php
 
require 'function.php'; 

$name = isset($_POST['name']) ? $_POST['name'] : null;
$login = isset($_POST['login']) ? $_POST['login'] : null;
$sbnome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
 
 

if (empty($name) || empty($login) || empty($sbnome) || empty($senha))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 

$isoDate = dateConvert($birthdate);
 

$PDO = db_connect();
$sql = "INSERT INTO users(name, login, sobrenome, senha) VALUES($nome, $login, $sobrenome, $senha)";
$sql =  msqli_query($PDO,$sql);
$stmt = $PDO->prepare($sql);
$stmt->bindParam('nome', $name);
$stmt->bindParam('login', $login);
$stmt->bindParam('sobrenome', $sbnome);
$stmt->bindParam('123', $isoDate);
 
 
?>
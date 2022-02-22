<?php
include_once 'banco.php';

$resul = mysqli_query($mysqli,"SELECT * FROM projeto");// or die($mysqli->error($mysqli));


//while($row = mysqli_fetch_row($resul)) { 
  echo "-----------------------------------------<br />";
  echo "Nome:".$resul['$nome']."<br />";
  echo "sobrenome:".$resul['$sobrenome']."<br />";
  echo "login:".$resul['$login']."<br />";
  echo "senha:".$resul['$senha']."<br />";


?>
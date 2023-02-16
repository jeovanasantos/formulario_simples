<?php
$hostname ="localhost";
$bancodedados ="cadastro";
$usuario="root";
$senha="";
/*Não faço a mínima ideia do que tá acontecendo aqui, tenho que pesquisar. Só sei que conectou com o BD "cadastro" */
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
echo "falha ao conectar:(". $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

?>
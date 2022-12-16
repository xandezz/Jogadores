<?php

$hostname = "localhost";
$bancodedados = "selecao";
$usuario = "root";
$senha = "";


$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli==true){
    
}
else{
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

?>
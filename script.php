<?php
include('conexao.php');

$usuario = filter_input(INPUT_GET, 'usuario');

if ($mysqli==true) {

    $sql_code = "SELECT usuario FROM usuarios where usuario = '$usuario'";
    $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);
    $quantidade = $sql_query->num_rows;

  
    $exibe = $sql_query->fetch_assoc();
    $quantidade = $sql_query->num_rows;
    if($quantidade>0){
       $mysqli -> close();
        echo json_encode($exibe['usuario']);
        exit(); 
    }
    
}


?>
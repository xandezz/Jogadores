<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['ID'])){
    die("<!DOCTYPE html>
    <html lang=\"pt-br\">
    
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Nome Seleção</title>
        <link rel=\"stylesheet\" href=\"assets/index.css\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap\" rel=\"stylesheet\">
    </head>
    
    <body >
    <div class=\"flex-coluna container center\">
        <h1 class=\"titulo\">Você não pode acessar esta página porque não está logado.</h1>
        <button class=\"botao\" type=\"button\" onclick=\"window.location.href = 'index.php'\" style=\"padding: 10px 50px\">Voltar para os jogadores</button>
    </div>
        
    </body>
    
    </html>");
}

?>


<?php
include('conexao.php');
if(!isset($_SESSION)){
    session_start();
}

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleções</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>

<body>
<form method="POST" class="container center" id="form-adiciona" name="form-adiciona">
        <h1 class="titulo">Adicione o novo jogador!</h1>
        <div class="flex-linha item--crud ">
            <div class="flex-coluna center">
                    <p class="branco">Nome:</p>
                    <input type="text" required autocomplete="off" name="nome-novoJogador" class="input">
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Número:</p>
                    <input type="text" required autocomplete="off" name="numero-novoJogador" class="input">
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Posição:</p>
                    <input type="text" required autocomplete="off" name="posicao-novoJogador" class="input">
            </div>
        </div>
        <button class="botao" type="submit">Adicionar jogador</button>
        <botao class="botao" onclick="window.location.href = 'jogadores.php'">Voltar para os jogadores</button>
</form>
    
</body>

</html>
<?php
$usuarioNovoJogador = $_SESSION['usuario'];

if(isset($_POST['nome-novoJogador']) || isset($_POST['numero-novoJogador']) || isset($_POST['posicao-novoJogador']) ){
    if(strlen($_POST['nome-novoJogador']) == 0){
        
    }else if(strlen($_POST['numero-novoJogador']) == 0){
        
    }else if(strlen($_POST['posicao-novoJogador']) == 0){
        
    }else{
        $nomeNovoJogador = $_POST['nome-novoJogador'];
        $numeroNovoJogador = $_POST['numero-novoJogador'];
        $posicaNovoJogador = $_POST['posicao-novoJogador'];
        
        $sql_code = "INSERT INTO jogadores (nome, numero, posicao, usuario) VALUES ('$nomeNovoJogador', '$numeroNovoJogador', '$posicaNovoJogador', '$usuarioNovoJogador')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error); 
        header("Location: jogadores.php");
    }
}
?>
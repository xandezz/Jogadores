<?php
include('conexao.php');
if(!isset($_SESSION)){
    session_start();
}

include('protect.php');

$ID = filter_input(INPUT_GET, 'ID');

$sql_code = "SELECT * FROM jogadores where ID = '$ID'";
$sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);

$exibe = $sql_query->fetch_assoc();
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
    <form method="POST" class="container center" id="form-edita" name="form-edita">
        <h1 class="titulo">Edite o jogador!</h1>
            <div class="flex-linha item--crud">
                <div class="flex-coluna center">
                    <p class="branco">Nome:</p>
                    <p name="nome-jogadorAntigo" class="branco">
                    <?php
                    echo $exibe['nome'];
                    ?>
                    </p>
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Número:</p>
                    <p name="numero-jogadorAntigo" class="branco">
                    <?php
                    echo $exibe['numero'];
                    ?>
                    </p>
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Posição:</p>
                    <p name="posicao-jogadorAntigo" class="branco">
                    <?php
                    echo $exibe['posicao'];
                    ?>
                    </p>
                </div>
            </div>
            <div class="flex-linha item--crud ">
                <div class="flex-coluna center">
                    <p class="branco">Novo nome:</p>
                    <p  class="branco">
                    <?php
                    echo $exibe['nome'];
                    ?>
                    </p>
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Novo número:</p>
                    <input type="text" autocomplete="off" name="numero-novoJogador" class="input">
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Novo posição:</p>
                    <input type="text" autocomplete="off" name="posicao-novoJogador" class="input">
                </div>
            </div>
            <button class="botao" type="submit">Editar jogador</button>
            <botao class="botao" onclick="window.location.href = 'jogadores.php'">Voltar para os jogadores</button>
        </form>
        
    </body>

</html>



<?php
if(isset($_POST['numero-novoJogador']) || isset($_POST['posicao-novoJogador']) ){
    if(strlen($_POST['numero-novoJogador']) == 0){
        $numeroNovoJogador = $exibe['numero'];
    }else{
        $numeroNovoJogador = $_POST['numero-novoJogador'];
    }
    if(strlen($_POST['posicao-novoJogador']) == 0){
        $posicaNovoJogador = $exibe['posicao'];
    }else{
        $posicaNovoJogador = $_POST['posicao-novoJogador'];
    }
        
        $sql_code = "UPDATE jogadores SET numero = '$numeroNovoJogador', posicao = '$posicaNovoJogador' WHERE (ID = '$ID')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        header("Location: jogadores.php"); 
}
?>
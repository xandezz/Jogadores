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
    <form method="POST" class="container center" id="form-delet" name="form-delete">
        <h1 class="titulo">Deseja mesmo deletar o jogador?</h1>
            <div class="flex-linha item--crud">
                <div class="flex-coluna center">
                    <p class="branco">Nome:</p>
                    <p name="nome-jogador" class="branco">
                    <?php
                    echo $exibe['nome'];
                    ?>
                    </p>
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Número:</p>
                    <p name="numero-jogador" class="branco">
                    <?php
                    echo $exibe['numero'];
                    ?>
                    </p>
                </div>
                <div class="flex-coluna center">
                    <p class="branco">Posição:</p>    
                    <p name="posicao-jogador" class="branco">
                    <?php
                    echo $exibe['posicao'];
                    ?>
                    </p>
                </div>
            </div>
            <input type="text" required autocomplete="off" name="teste" class="invisivel" value="deletar">
            <button class="botao" type="submit">Deletar jogador</button>
            <botao class="botao" onclick="window.location.href = 'jogadores.php'">Voltar para os jogadores</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['teste'])){

    $sql_code = "DELETE FROM jogadores WHERE (ID = '$ID'); ";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    header("Location: jogadores.php");
}
?>
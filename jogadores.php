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
        <section class="container--jogadores center">
                <h1 class="titulo titulo--usuario">
                <?php
                $usuario = $_SESSION['usuario'];
                echo $usuario;
                ?>
                </h1>
                <h3 class="titulo titulo--jogadores">
                <?php
                echo"Monte sua seleção";
                ?>
                </h3>
                <?php
                        $sql_code = "SELECT * FROM jogadores where usuario = '$usuario'";
                        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);
                

                        $quantidade = $sql_query->num_rows;
                        while($exibe = $sql_query->fetch_assoc()){
                                $ID = $exibe['ID'];
                                echo "<div class='flex-linha item--crud'>";
                                echo "<div class='flex-coluna center'>";
                                echo "<p class='branco'>Nome:</p>";
                                echo "<p class='branco'>";
                                echo $exibe['nome'];
                                echo "</p>";
                                echo "</div>";
                                echo "<div class='flex-coluna center'>";
                                echo "<p class='branco'>Número:</p>";
                                echo "<p class='branco'>";
                                echo $exibe['numero'];
                                echo "</p>";
                                echo "</div>";
                                echo "<div class='flex-coluna center'>";
                                echo "<p class='branco'>Posição:</p>";
                                echo "<p class='branco'>";
                                echo $exibe['posicao'];
                                echo "</p>";
                                echo "</div>";
                                echo "<div class='flex-linha flex-linha--crud'>";
                                echo "<button type='submit' class='botao--crud' onclick=\"window.location.href = 'atualizaJogador.php?ID=$ID'\".php>Editar</button>";
                                echo "<p class='azul_claro'>|</p>";
                                echo "<button type='submit' class='botao--crud' onclick=\"window.location.href = 'deletaJogador.php?ID=$ID'\">Deletar</button>";
                                echo "</div>";
                                echo "</div>";
                        };
                ?>
                <button class="botao" onclick="window.location.href = 'adicionaJogador.php'">Adicionar jogador</button>
                <button class="botao" onclick="window.location.href = 'logout.php'">Sair da Conta!</button>
        </section>
    
</body>

</html> 



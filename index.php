<?php 
include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])){

    if(strlen($_POST['usuario']) == 0){
        
    } else if(strlen($_POST['senha']) == 0){
    
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios where usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['ID'] = $usuario['ID'];
            $_SESSION['usuario'] = $usuario['usuario'];

            header("Location: jogadores.php");

        } else{
            echo "<script>alert('E-mail ou senha incorretos')</script>";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>

<body>
    
    <form method="POST" class="container">
        <h1 class="titulo">Login</h1>
        <!--h1 class="titulo">!!!!!!!!!!!!!!!!!!!!!!!!!  Trocar a fonte  !!!!!!!!!!!!!!!!!!!!!!!!!</h1>
        <h1 class="titulo">!!!!!!!!!!!!!!!!!!!!!!!! inpedir de enviar o form com cep errado !!!!!!!!!!!!!!!!!!!!!!!!!</h1-->
        <p class="label" id="usuario--login">Usúario</p>
        <input type="text" required autocomplete="off" name="usuario" class="input usuario_senha" placeholder="Usúario" id="usuario-login">

        <p class="label" id="senha--login">Senha</p>
        <input type="password" required autocomplete="off" name="senha" class="input usuario_senha" placeholder="••••••••••••" id="senha-login">

        <div class="checkbox_login">
            <input type="checkbox" name="manterLogin" id="manter-login" class="manterLogin">
            <p class="checkbox_login--texto">Manter conectado por 30 dias</p>
        </div>

        <button type="submit" class="botao" id="botao-login">Entrar</button>
        
        <a href="#" class="link_login">Esqueceu sua senha?</a>
        <a href="cadastro.php" class="link_login">Não possui conta? Crie uma agora!</a>

    </form>
    
</body>

</html>
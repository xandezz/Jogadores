<?php
include('conexao.php');


$key = uniqid(md5(rand()));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/index.css ?key=<?php echo $key ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <form method="POST" class="container" id="form-cadastro" name="form-cadastro">

        <h1 class="titulo">Cadastro</h1>

        <div class="flex-linha">
            <!-- NOME -->
            <div class="flex-coluna">
                <p class="label label--cadastro">Nome</p>
                <input type="text" required autocomplete="off" name="nome" class="input input--cadastro nome" placeholder="Digite seu primeiro nome" id="nome-cadastro">
            </div>
            <div class="flex-coluna">
                <p class="label label--cadastro">Sobrenome</p>
                <input type="text" required autocomplete="off" name="sobrenome" class="input input--cadastro nome" placeholder="Digite seu sobrenome" id="sobrenome-cadastro">
            </div>
            <!-- CPF -->
            <div class="flex-coluna">

                <p class="label label--cadastro">CPF</p>

                <input type="text" required autocomplete="off" name="cpf" class="input input--cadastro cpf" placeholder="000.000.000-00" id="cpf-cadastro">
            </div>
        </div>

        <div class="flex-linha">

            <div class="flex-coluna">
                <p class="label label--cadastro">Data de Nascimento</p>
                <input type="text" required autocomplete="off" name="nascimento" class="input input--cadastro nascimento" placeholder="00/00/0000" id="nascimento-cadastro">
            </div>

            <div class="flex-coluna">
                <p class="label label--cadastro">Celular</p>
                <input type="text" required autocomplete="off" name="celular" class="input input--cadastro celular" placeholder="Telefone com DDD" id="celular-cadastro">
            </div>

            <div class="flex-coluna">
                <p class="label label--cadastro">E-mail</p>
                <input type="text" required autocomplete="off" name="email" class="input input--cadastro email" placeholder="seu@melhoremail.com" id="email-cadastro">
            </div>

        </div>
        <div class="flex-linha">
            <div class="flex-coluna">
                <p class="label label--cadastro">CEP</p>
                <input type="text" required autocomplete="off" name="cep" class="input input--cadastro cep" placeholder="00000-000" id="cep-cadastro">
            </div>

            <div class="flex-coluna">
                <p class="label label--cadastro">Logradouro</p>
                <input type="text" required autocomplete="off" name="logradouro" class="input input--cadastro logradouro" placeholder="Logradouro" id="logradouro-cadastro" value="" readonly="">
            </div>
        </div>

        <div class="flex-linha">
            <div class="flex-coluna">
                <p class="label label--cadastro">Número</p>
                <input type="text" required autocomplete="off" name="numero" class="input input--cadastro numero" placeholder="Número" id="numero-cadastro">
            </div>
            <div class="flex-coluna">
                <p class="label label--cadastro">Bairro</p>
                <input type="text" required autocomplete="off" name="bairro" class="input input--cadastro bairro" placeholder="Bairro" id="bairro-cadastro" readonly="">
            </div>
            <div class="flex-coluna">
                <p class="label label--cadastro">Cidade</p>
                <input type="text" required autocomplete="off" name="cidade" class="input input--cadastro cidade" placeholder="Cidade" id="cidade-cadastro" readonly="">
            </div>
            <div class="flex-coluna">
                <p class="label label--cadastro">UF</p>
                <input type="text" required autocomplete="off" name="uf" class="input input--cadastro uf" placeholder="UF" id="uf-cadastro" readonly="">
            </div>
        </div>

        <div class="flex-coluna">
            <p class="label label--cadastro">Complemento</p>
            <input type="text" autocomplete="off" name="complemento" class="input input--cadastro complemento" placeholder="Complemento do endereço" id="complemento-cadastro">
        </div>
        <div class="flex-linha">
            <div class="flex-coluna">
                <p class="label">Usúario</p>
                <input type="text" required autocomplete="off" name="usuario" class="input usuario--senha" placeholder="Usúario" id="usuario-cadastro" value="">
            </div>
            <div class="flex-coluna">
                <div class="flex-linha">
                    <div class="flex-coluna">
                        <p class="label">Sua senha</p>
                        <input type="password" required autocomplete="off" name="senha" class="input  usuario--senha" placeholder="••••••••••••" id="senha-cadastro">
                    </div>

                </div>
            </div>
            <input type="submit" class="botao botao--cadastrar" value="Cadastrar" id="botao-cadastro">
        </div>
        <botao class="botao" onclick="window.location.href = 'index.php'">Voltar para tela de login</button>
    </form>

</body>
<script src="Scripts/JQuery.js"></script>
<script src="Scripts/apiViaCep.js"></script>
<script src="Scripts/script.js ?key=<?php echo $key ?>"></script>

</html>

<?php
if (isset($_POST['nome']) || isset($_POST['sobrenome']) || isset($_POST['cpf']) || isset($_POST['nascimento']) || isset($_POST['celular']) || isset($_POST['email']) || isset($_POST['cep']) || isset($_POST['logradouro']) || isset($_POST['numero']) || isset($_POST['bairro']) || isset($_POST['cidade']) || isset($_POST['uf']) || isset($_POST['usuario']) || isset($_POST['senha'])) {
    if (strlen($_POST['nome']) == 0) {
    } else if (strlen($_POST['sobrenome']) == 0) {
    } else if (strlen($_POST['cpf']) == 0) {
    } else if (strlen($_POST['nascimento']) == 0) {
    } else if (strlen($_POST['celular']) == 0) {
    } else if (strlen($_POST['email']) == 0) {
    } else if (strlen($_POST['cep']) == 0) {
    } else if (strlen($_POST['logradouro']) == 0) {
    } else if (strlen($_POST['numero']) == 0) {
    } else if (strlen($_POST['bairro']) == 0) {
    } else if (strlen($_POST['cidade']) == 0) {
    } else if (strlen($_POST['uf']) == 0) {
    } else if (strlen($_POST['usuario']) == 0) {
    } else if (strlen($_POST['senha']) == 0) {
    } else {

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $complemento = $_POST['complemento'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT usuario FROM usuarios where usuario = '$usuario'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);
        $quantidade = $sql_query->num_rows;
        if ($quantidade > 0) {
            echo "<script>
            alert('Usuario ja existe')
            </script>";
        } else {
            header("Location: index.php");
            $sql_code = "INSERT INTO usuarios (nome, sobrenome, CPF, nascimento, celular, email, CEP, logradouro, numero, bairro, cidade, UF, complemento, usuario, senha) VALUES ('$nome', '$sobrenome', '$cpf', '$nascimento', '$celular', '$email', '$cep', '$logradouro', '$numero', '$bairro', '$cidade', '$uf', '$complemento', '$usuario', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            echo "<script>
            location.href='index.php';
            alert('Cadastro realizado com sucesso!')
            </script>";
        }
    }
}
?>
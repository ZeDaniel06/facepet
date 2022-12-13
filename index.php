<?php
include('conexao.php');
if(isset($_POST['login']) || isset($_POST['senha'])){
    if(strlen($_POST['login'])== 0){
        echo "Preencha o login.";
    } else if(strlen($_POST['senha'])== 0){
        echo "Preencha a senha";
    }else{
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM loginsystem WHERE login='$login' AND senha='$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha!");
        $quantidade= $sql_query->num_rows;
        if($quantidade==1){
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['login'] = $usuario['login'];
            header("Location: painel.php");
        }else{
            echo "Falha ao logar! Dados incorretos.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Acesse sua conta</h1>
    </header>
    <form class="logando" action="" method="POST">
        <p>
            <label>Login</label>
            <input type="text" name="login">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
        <p>
            <p>Ainda não é cadastrado?</p>
            <a href="cadastro.php">Cadastrar-se</a>
        </p>
    </form>
    <footer></footer>
</body>
</html>
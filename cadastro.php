<?php
include('conexao.php');
if(isset($_POST['login']) || isset($_POST['senha'])){
    if(strlen($_POST['login'])== 0){
        echo "Preencha o login.";
    } else if(strlen($_POST['senha'])== 0){
        echo "Preencha a senha";
    }else if(strlen($_POST['confirmsenha'])== 0){
        echo "Preencha a senha";
    }
    else{
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $confirmsenha = $mysqli->real_escape_string($_POST['confirmsenha']);
        if(!($confirmsenha == $senha)){
            echo "Confirmação diferente da senha.";
        }else{
            $sql_code = "select * from loginsystem where login='$login'";
            $sql_query = $mysqli->query($sql_code) or die("Falha no código");
            $quantidade=$sql_query->num_rows;
            if($quantidade==1){
                echo "Usuário já existente!";
            }else{
        $sql_code = "insert into loginsystem values(default,'$login','$senha')";
        $sql_query = $mysqli->query($sql_code) or die("Falha no código.");
        header("location: index.php");
            }
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
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Tela de cadastro</h1>
    </header>
    <form class="registrar" action="" method="POST">
        <p>
            <label>Login</label>
            <input type="text" name="login">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <label>Confirme a Senha</label>
            <input type="password" name="confirmsenha">
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
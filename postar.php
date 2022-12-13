<?php
include('conexao.php');
include('protect.php');
if(isset($_POST['texto'])){
    if(strlen($_POST['texto'])== 0){
        echo "Preencha com seu texto";
    }else{
        $texto = $mysqli->real_escape_string($_POST['texto']);
        $dia=date('d/m/Y');
        $autor=$_SESSION['login'];
        $sql_code = "insert into postagem values(default,'$texto','$autor','$dia')";
        $sql_query = $mysqli->query($sql_code) or die("Falha no código.");
        header("location: painel.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Escreva sua postagem</h1>
    <form action="" method="POST">
        <p>
            <input type="text" name="texto">
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
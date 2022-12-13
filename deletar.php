<?php
include('conexao.php');
include('protect.php');
$id=$_GET["id"];
$autor=$_SESSION['login'];
$sql_code="select * from postagem where id='$id' and autor='$autor'";
$consulta=$mysqli->query($sql_code) or die("Falhou!");
$quantidade=$consulta->num_rows;
            if($quantidade==0){
                echo "Não é possível apagar uma publicação que não é sua!";
            }else{
$sql_code="delete from postagem where id='$id' and autor='$autor'";
$consulta=$mysqli->query($sql_code) or die("Falha");
echo "Publicação apagada com sucesso!";
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar publicacao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
include ('conexao.php');
include('protect.php');
$consulta = "select * from postagem";
$con= $mysqli->query($consulta) or die($mysqli->error);
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
    <style>
        body{
            text-align:center;
        }
    </style>
        <h3>Publicações</h3>
        <div>
        <?php while($dado= $con->fetch_array()) { ?>
            <p class="descricao">
                <br>
                PostID: <?php echo $dado["id"]; ?>
                Data: <?php echo $dado["dia"]; ?>
                <a href="deletar.php?id=<?php echo $dado["id"]; ?>">Excluir</a>
                <br>
            </p>
            <p class="publicacao">
                <?php echo $dado["texto"]; ?>
                <br>
                Autor: 
                <?php echo $dado["autor"]; ?>
            </p>
        <?php } ?>
        </div>
        
</body>
</html>
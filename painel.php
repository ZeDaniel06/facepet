<?php
include('protect.php');
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Bem vindo ao FacePet, <?php echo $_SESSION['login']; ?></h1>
    </header>
    
    
    <?php 
    include('postar.php');
    include('postagem2.php');?>
    <footer class="deslogar">
    <a href="logout.php">Deslogar</a>
    </footer>
</body>
</html>
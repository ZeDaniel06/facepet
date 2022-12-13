<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Pagina inacessivel por não estar logado!<p><a href=\"index.php\">Entrar </a></p>");
}
?>
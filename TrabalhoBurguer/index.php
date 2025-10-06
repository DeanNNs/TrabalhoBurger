<?php
require_once "conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Allapolo's Burger</h1>

    <iframe src="/codigo/telaCompra.php" width="1000" height="600" frameborder="0"></iframe>
    <iframe src="/codigo/categoriaProduto.php" width="1000" height="600" frameborder="0"></iframe>


   <?php

    if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
         echo '<a href="/codigo/deslogar.php"> <img src="/imgs/sair.png" class="sair" width="50" height="50"> </a>';
    } else {
       echo '<a href="/codigo/telaLogin.php"> <img src="/imgs/user.png" class="user" width="50" height="50"> </a>';    
    }

    

?>




</body>
</html>
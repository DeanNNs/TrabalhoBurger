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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css"></link>
</head>
<body>
    <h1 class="h1">Allapolo's Burger</h1>

    <iframe name="principal" src="/codigo/telaCompra.php" width="1000" height="600" frameborder="0"></iframe>
    <iframe src="/codigo/categoriaProduto.php" width="1000" height="600" frameborder="0"></iframe>

    <a href="/codigo/carrinho.php"> <img src="/imgs/usuario_carrinho/carrinho.png" class="carrinho" width="50" height="50"> </a>

   <?php
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
         echo '<a href="/codigo/deslogar.php"> <img src="/imgs/usuario_carrinho/sair.png" class="sair" width="50" height="50"> </a>';
    } else {
       echo '<a href="/codigo/telaLogin.php"> <img src="/imgs/usuario_carrinho/user.png" class="user" width="50" height="50"> </a>';    
    }
?>
</body>
</html>
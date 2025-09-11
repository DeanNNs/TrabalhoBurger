<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Allapolo's Burger</h1>

   <?php

    require_once "conexao.php";
    require_once "./codigo/verificarLogin.php";

    session_start();
    if ($_SESSION['logado'] == 1) {
         echo '<a href="/codigo/deslogar.php"> <img src="/imgs/sair.png" class="sair" width="50" height="50"> </a>';
    } else {
       echo '<a href="/codigo/telaLogin.php"> <img src="/imgs/user.png" class="user" width="50" height="50"> </a>';    
    }

?>

</body>
</html>
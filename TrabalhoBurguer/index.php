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

</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.header {
    background: linear-gradient(135deg, #ffcc00, #ffaa00);
    color: #8B4513;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #ff7700, #ffcc00, #ff7700);
}

.logo {
    font-family: "Honk", system-ui;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
  font-variation-settings:
    "MORF" 0,
    "SHLN" 31.2;
}

body {
    background-color:rgb(255, 255, 254);
    color: #333;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.container-principal {
    display: flex;
    flex-wrap: wrap;
    max-width: 1400px;
    margin: 30px auto;
    padding: 0 20px;
    gap: 30px;
    justify-content: center;
}

.frame-produtos {
    flex: 1;
    min-width: 500px;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.frame-produtos:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.frame-categorias {
    flex: 1;
    min-width: 500px;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.frame-categorias:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.iframe-estilizado {
    width: 100%;
    height: 600px;
    border: none;
    display: block;
}
</style>
<body>

    <!-- Faixa do Topo -->
    <header class="header">
        <h1 class="logo">Allapolo's Burger</h1>
    </header>

    <div class="iframe-estilizado">
        <div class="conteiner-principal">
            <div class="frame-produtos">
                <iframe name="principal" src="/codigo/telaCompra.php" width="1000" height="600" frameborder="0"></iframe>
            </div>
            <div class="frame-categorias">
                <iframe src="/codigo/categoriaProduto.php" width="1000" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <a href="/codigo/carrinho.php"> <img src="/imgs/usuario_carrinho/carrinho.png" class="carrinho" width="50" height="50"> </a>

   <?php
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
         echo '<a href="/codigo/deslogar.php"> <img src="/imgs/usuario_carrinho/sair.png" class="sair" width="50" height="50"> </a>';
    } else {
       echo '<a href="/codigo/telaLogin.php"> <img src="/imgs/usuario_carrinho/user.png" class="user" width="50" height="50"> </a>';    
    }
?>

    <!-- Fundo com Hamburgueres Caindo -->
    <div class="background-falling"></div>
</body>
</html>
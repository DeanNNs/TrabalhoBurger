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

.icone-sair, .icone-carrinho, .icone-usuario {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
    background: white;
}

.icone-carrinho:hover, .icone-usuario:hover, .icone-sair:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

 .icone-carrinho, .icone-usuario, .icone-sair {
    background: linear-gradient(135deg, #ffcc00, #ffaa00);
}

 .icone-carrinho img, .icone-usuario img, .icone-sair img {
    width: 40px;
    height: 40px;
    filter: brightness(0.9);
}

 .slogan-delivery {
    font-size: 1.2rem;
    font-weight: 500;
    opacity: 0.9;
}

@media (max-width: 1100px) {
    .container-principal {
        flex-direction: column;
        align-items: center;
    }
    .frame-produtos, .frame-categorias {
        min-width: 90%;
    }
}
</style>
<body>

    <!-- Faixa do Topo -->
    <header class="header">
        <h1 class="logo">Allapolo's Burger</h1>
        <p class="slogan-delivery">Os melhores hambúrgueres da cidade, entregues na sua casa!</p>
    </header>

    <div class="conteiner-principal">
        <div class="frame-produtos">
            <div class="frame-produtos">
                <iframe name="principal" src="/codigo/telaCompra.php" width="1000" height="600" frameborder="0"></iframe>
            </div>



            <div class="frame-categorias">
                <iframe src="/codigo/categoriaProduto.php" width="1000" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <div class="nav-icones">
        <a href="/codigo/carrinho.php" class="icone-carrinho"> <img src="/imgs/usuario_carrinho/carrinho.png" alt="Carrinho" width="50" height="50"> </a>
    </div>
   <?php
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
        echo '<div class="icone-sair">';
        echo '<a href="/codigo/deslogar.php"> <img src="/imgs/usuario_carrinho/sair.png" class="sair" width="50" height="50"> </a>';
        echo '</div>';
        } else {
        echo '<div class="icone-usuario">';
        echo '<a href="/codigo/telaLogin.php"> <img src="/imgs/usuario_carrinho/user.png" class="user" width="50" height="50"> </a>';
        echo '</div>'; 
    }
?>

    <!-- Fundo com Hamburgueres Caindo -->
    <div class="background-falling"></div>
</body>
</html>
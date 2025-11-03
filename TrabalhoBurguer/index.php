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
    justify-content: center;
    align-items: flex-start;
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
    gap: 30px;
}

.frame-produtos-central {
    width: 80%;
    max-width: 1000px;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 0 auto;
}

.frame-produtos-central:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.frame-categorias-lateral {
    width: 300px;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.frame-categorias-lateral:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.iframe-estilizado {
    width: 50%;
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

.rodape-burguer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-top: auto;
}

.texto-rodape {
    font-size: 0.9rem;
    opacity: 0.8;
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
        <div class="frame-produtos-central">
            <div class="titulo-frame">
                <iframe name="principal" src="/codigo/telaCompra.php" class="iframe-estilizado"></iframe>
            </div>


            <div class="frame-categorias-lateral">
                <div class="titulo-frame">
                    <iframe src="/codigo/categoriaProduto.php" class="iframe-estilizado"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-icones">
        <a href="/codigo/carrinho.php" class="icone-carrinho">
            <img src="/imgs/usuario_carrinho/carrinho.png" alt="Carrinho">
        </a>
    
        <?php
     if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
            echo'<a href="/codigo/deslogar.php" class="icone-sair"> 
                    <img src="/imgs/usuario_carrinho/sair.png" alt="Sair"> 
                </a>';
         } else {
            echo'<a href="/codigo/telaLogin.php" class="icone-usuario">
                    <img src="/imgs/usuario_carrinho/user.png" alt="Usuario">
                </a>';
            }
        ?>
    </div>
    <footer class="rodape-burguer">
        <p class="texto-rodape">Allapolo's Burguer &copy; 2025 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk:MORF,SHLN@37,31.2&display=swap" rel="stylesheet">
    <title>Hamburgueria - Delivery</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>

    </style>
</head>
<body>
    <!-- Faixa amarela do topo -->
    <header class="header-burguer">
        <h1 class="logo-hamburgueria">ALLAPOLO'S BURGER</h1>
        <p class="slogan-delivery">Os melhores hambúrgueres da cidade, entregues na sua casa!</p>
    </header>

    <img src="/imgs/Allapolo's.png" class = "logo-empresa">

    <!-- Container principal com iframes lado a lado -->
    <div class="container-principal">
        <!-- Iframe de produtos à esquerda -->
        <div class="frame-produtos-esquerda">
            <div class="titulo-frame">Produtos</div>
            <iframe name="principal" src="/codigo/telaCompra.php" class="iframe-estilizado"></iframe>
        </div>
        
        <!-- Iframe de categorias à direita -->
        <div class="frame-categorias-direita">
            <div class="titulo-frame">Categorias</div>
            <iframe src="/codigo/categoriaProduto.php" class="iframe-estilizado"></iframe>
        </div>
    </div>

    <!-- Ícones de navegação -->
    <div class="nav-icones">
        <a href="/codigo/carrinho.php" class="icone-carrinho">
            <img src="/imgs/carrinho.png" alt="Carrinho">
        </a>
        
        <?php
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
            echo '<a href="/codigo/deslogar.php" class="icone-sair">
                    <img src="/imgs/sair.png" alt="Sair">
                  </a>';
        } else {
            echo '<a href="/codigo/telaLogin.php" class="icone-usuario">
                    <img src="/imgs/user.png" alt="Usuário">
                  </a>';    
        }
        ?>
    </div>

    <!-- Rodapé -->
    <footer class="rodape-burguer">
        <p class="texto-rodape">ALLAPOLO'S BURGER &copy; 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
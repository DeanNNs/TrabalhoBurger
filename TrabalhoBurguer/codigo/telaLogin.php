<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ALLAPOLO'S BURGER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk:MORF,SHLN@37,31.2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="cabecalho-hamburgueria">
        <h1 class="titulo-principal">ALLAPOLO'S BURGER</h1>
        <p class="subtitulo-principal">Os melhores hambúrgueres da cidade, entregues na sua casa!</p>
    </header>

    <div class="container-login">
        <form action="verificarLogin.php" method="post" class="formulario-login">
            <h2 class="titulo-login">Acessar Conta</h2>
            <p class="subtitulo-login">Entre com seus dados para continuar</p>
            
            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                echo '<div class="mensagem-alerta mensagem-erro">E-mail ou senha incorretos!</div>';
            }
            
            if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
                echo '<div class="mensagem-alerta mensagem-sucesso">Cadastro realizado com sucesso!</div>';
            }
            ?>
            
            <div class="grupo-login">
                <label class="rotulo-login">E-mail:</label>
                <input type="email" name="email" class="entrada-login" placeholder="seu@email.com" required>
            </div>
            
            <div class="grupo-login">
                <label class="rotulo-login">Senha:</label>
                <input type="password" name="senha" class="entrada-login" placeholder="Digite sua senha" required>
            </div>
            
            <button type="submit" class="botao-entrar">Entrar</button>
            
            <div class="link-cadastro">
                <a href="formUsuario.html">Cadastrar novo usuário</a>
            </div>
        </form>
    </div>

    <footer class="rodape-hamburgueria">
        <p class="texto-rodape">ALLAPOLO'S BURGER &copy; 2025 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
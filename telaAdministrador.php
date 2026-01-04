<?php

require_once "./codigo/verificarLogado.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="./css/styleAdministrador.css" rel="stylesheet">
</head>

<body>
    <div class="admin-container">
        <h1>Modo Administrador</h1>

        <div class="admin-menu">
            <a href="./codigo/formProduto.php" class="admin-link">Adicionar um novo produto</a>
            <a href="./codigo/listarProduto.php" class="admin-link">Deletar um produto</a>
            <a href="./codigo/listarUsuario.php" class="admin-link">Listar Usuários</a>
            <a href="./codigo/listarPedido.php" class="admin-link">Listar Pedidos</a>
            <a href="./codigo/deslogar.php" class="admin-link logout-link">Sair</a>
        </div>
    </div>
</body>

</html>
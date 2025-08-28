<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = "c";

    salvarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo);
?>
</body>
</html>
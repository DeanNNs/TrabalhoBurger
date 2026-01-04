<?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $nome="Carlos";
    $telefone="4002-8922";
    $email="carlos@gmail.com";
    $senha="abc123";
    $tipo="C";

    salvarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo);
?>
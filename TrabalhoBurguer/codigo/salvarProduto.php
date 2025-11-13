<?php
    
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $descricao = $_GET['descricao'];
    $tipo = $_GET['tipo'];

    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);
?>

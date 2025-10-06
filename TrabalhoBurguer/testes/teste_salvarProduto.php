<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Suco de tamarindo";
    $preco=30.00;
    $descricao="Com gosto de abacaxi";
    $tipo="B";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
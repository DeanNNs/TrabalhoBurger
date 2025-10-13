<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Suco de uva";
    $preco=26.00;
    $descricao="sim";
    $tipo="B";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
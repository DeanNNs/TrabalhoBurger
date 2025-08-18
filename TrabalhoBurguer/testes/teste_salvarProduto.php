<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Suco de tamarindo";
    $preco=10.50;
    $descricao="Garrafa de 1,5 litro de suco de maracujá";
    $tipo="B";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo)

?>
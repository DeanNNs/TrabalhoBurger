<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Combo de XBurguer com batata";
    $preco=10.50;
    $descricao="Garrafa de 1,5 litro de suco de maracujá";
    $tipo="C";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
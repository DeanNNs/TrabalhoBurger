<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Burgão monstro";
    $preco=25.50;
    $descricao="Hamburguer";
    $tipo="C";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
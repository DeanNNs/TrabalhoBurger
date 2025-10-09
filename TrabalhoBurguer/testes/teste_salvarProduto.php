<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Suco de goiaba";
    $preco=21.00;
    $descricao="2 litros de suco de laranja";
    $tipo="B";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
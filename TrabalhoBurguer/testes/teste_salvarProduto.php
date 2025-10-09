<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $nome="Hamburguer fodástico";
    $preco=25.00;
    $descricao="foda";
    $tipo="H";
    salvarProduto($conexao, $nome, $preco, $descricao, $tipo);

?>
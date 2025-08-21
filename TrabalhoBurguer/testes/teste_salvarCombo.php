<?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $nome="hamburguer xx com batata";
    $preco=40.00;
    $descricao="hamburguer xx com suco de laranja e batata";

    salvarCombo($conexao, $nome, $preco, $descricao);
?>
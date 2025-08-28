<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $idproduto=2;
    $idpedido=2;
    $quantidade=3;

    salvarItem($conexao, $idproduto, $idpedido, $quantidade);

?>
<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $idproduto=1;
    $idpedido=2;

    salvarItem($conexao, $idproduto, $idpedido);

?>
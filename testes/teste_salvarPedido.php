<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    $data="2025-05-27";
    $endereco="rua 1";
    $valor_total=45.25;
    $idusuario=1;

    salvarPedido($conexao, $data, $endereco, $valor_total, $idusuario);

?>
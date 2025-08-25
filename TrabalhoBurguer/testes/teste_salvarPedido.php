<?php
    require_once "../funcoes/funcoes_hamburgueria.php";
    require_once "../conexao.php";

    //YYYY-MM-DD
    $data="2025-05-27";
    $endereco="rua 1";
    $telefone="4002-8922";

    salvarPedido($conexao, $data, $endereco, $telefone);

?>
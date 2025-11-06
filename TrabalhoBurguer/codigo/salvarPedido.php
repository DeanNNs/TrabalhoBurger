<?php
    session_start();
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $data = $_GET['data'];
    $endereco = $_GET['endereco'];
    $valor_total = $_GET['total'];
    $idusuario = $_SESSION['idusuario'];
    
    salvarPedido($conexao, $data, $endereco, $valor_total, $idusuario);
?>

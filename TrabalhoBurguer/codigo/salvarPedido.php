<?php
    session_start();
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";


    $data = $_POST['data'];
    $endereco = $_POST['endereco'];
    $valor_total = $_GET['total'];
    $idusuario = $_SESSION['idusuario'];
    
    salvarPedido($conexao, $data, $endereco, $valor_total, $idusuario);

    header("Location:../index.php");
?>

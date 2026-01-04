<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$data ="2025-06-13";
$endereco ="Rua 3";
$valor_total =55.50;
$idpedido =1;


editarPedido($conexao, $data, $endereco, $valor_total, $idpedido);

?>
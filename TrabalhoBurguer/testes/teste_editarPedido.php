<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$data ="2025-06-13";
$endereco ="Rua 3";
$telefone ="4002-8952";
$idcombo = 1;
$idpedido =1;


editarPedido($conexao, $data, $endereco, $telefone, $idcombo, $idpedido);

?>
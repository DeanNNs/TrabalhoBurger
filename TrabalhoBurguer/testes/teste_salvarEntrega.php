<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$data = "12-22-1098"
$endereco = "Rua A";
$idcliente = 1;
$identregador = 1;
$idcarrinho = 1;

salvarEntrega($conexao, $data, $endereco, $telefone, $idcliente, $identregador, $idcarrinho);
?>
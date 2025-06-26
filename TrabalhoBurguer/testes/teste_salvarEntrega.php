<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$data = "1098-12-22";
$endereco = "Rua A";
$telefone="123456789";
$entregador_identregador = 1;
$usuario_idusuario = 1;

salvarEntrega($conexao, $data, $endereco, $telefone, $entregador_identregador, $usuario_idusuario);
?>
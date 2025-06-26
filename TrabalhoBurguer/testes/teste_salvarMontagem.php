<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$hamburguer = 1;
$presunto = 1;
$mussarela = 1;
$alface = 1;
$tomate = 1;
$salsicha = 1;
$ovo = 1;
$bacon = 1;
$milho = 1;
$batata = 1;
$pao = 1;
$frango = 1;
$quantidade = 1;
$idpedido = 1;
$idhistorico = 1;

salvarHamburguer($conexao, $hamburguer, $presunto, $mussarela, $alface, $tomate, $salsicha, $ovo, $bacon, $milho, $batata, $pao, $frango, $quantidade, $idpedido, $idhistorico);
?>
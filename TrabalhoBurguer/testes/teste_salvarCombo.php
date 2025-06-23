<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome= "Hamburguer de cheddar duplo ao molho de mingau, coca cola de 2l, batata frita";
$preco = "15.00";
$descricao = "Hamburguer de cheddar duplo ao molho de mingau";
$bebida_idbebida = 2;
$adicional_idadicional = 2;
$hamburguer_idhamburguer = 1;

salvarCombo($conexao, $nome, $preco, $descricao, $bebida_idbebida, $adicional_idadicional, $hamburguer_idhamburguer);
?>
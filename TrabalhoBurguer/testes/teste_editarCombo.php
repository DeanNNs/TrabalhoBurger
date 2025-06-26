<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idcombo = 1;
$nome = "Hamburguer de maracuja";
$preco = "10.00";
$descricao = "Hamburguer de maracuja, batata e coca";
$bebida_idbebida = 1;
$adicional_idadicional = 1;
$hamburguer_idhamburguer = 1;

editarCombo($conexao, $nome, $preco, $descricao, $bebida_idbebida, $adicional_idadicional, $hamburguer_idhamburguer, $idcombo);

?>
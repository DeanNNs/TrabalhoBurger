<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$nome= "Hamburguer de shader duplo ao molho de mingau";
$preco = "15.00";
$descricao = "Hamburguer de shader duplo ao molho de mingau, coca cola de 2l, batata frita";
$bebida_idbebida = "1";
$adicional_idadicional = "1";
$hamburguer_idhamburguer = "1";

salvarCombos($conexao, $nome, $preco, $descricao, $idbebida_bebida, $adicional_idadicional, $hamburguer_idhambuerguer);
?>
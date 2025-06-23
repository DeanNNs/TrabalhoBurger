<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idhamburguer = 1;
$nome = "Hamburguer de queijo";
$preco = "12.00";
$descricao = "Pao e queijo";

editarHamburguer($conexao, $nome, $preco, $descricao, $idhamburguer);
?>
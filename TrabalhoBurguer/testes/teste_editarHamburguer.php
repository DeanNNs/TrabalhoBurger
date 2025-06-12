<?php

require_once "../conexao.php";
require_once "../funcoes_hamburgeria.php";

$idhamburguer = 1;
$nome = "Hamburguer de queijo";
$preco = "12.00";
$descricao = "Pao e queijo";

editarHamburger($conexao, $nome, $preco, $descricao, $idhamburguer);
?>
<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idcombo = 1;
$nome ="Combo 2";
$preco =15.00;
$descricao ="hamburguer xx com suco x";

editarCombo($conexao, $nome, $preco, $descricao, $idcombo)
?>
<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idbebida = 3;
$tipo = "suco";
$nome = "Suco de uva";
$preco = "10.00";
$volume = "1,5l";

editarBebida($conexao, $tipo, $nome, $preco, $volume, $idbebida);
?>
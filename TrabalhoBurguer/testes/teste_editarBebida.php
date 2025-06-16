<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$idbebida = 1;
$tipo = "refrigerante";
$nome = "coca";
$preco = "35.00";
$volume = "2l";

editarBebida($conexao, $tipo, $nome, $preco, $volume, $idbebida);
?>
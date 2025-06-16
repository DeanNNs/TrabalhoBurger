<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$tipo = "refrigerante";
$nome= "coca";
$preco = "15.00";
$volume = "2l";

salvarBebidas($conexao, $tipo, $nome, $preco, $volume);
?>
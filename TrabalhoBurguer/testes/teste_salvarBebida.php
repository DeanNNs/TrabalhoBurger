<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$tipo = "refrigerante";
$nome= "coca";
$preco = "15.00";
$volume = "2l";

salvarBebida($conexao, $tipo, $nome, $preco, $volume);
?>
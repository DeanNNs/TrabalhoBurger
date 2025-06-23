<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome= "batata";
$preco = "10.00";

salvarAdicional($conexao, $preco, $nome);
?>
<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$nome= "batata";
$preco = "10.00";

salvarAdicional($conexao, $nome, $preco);
?>
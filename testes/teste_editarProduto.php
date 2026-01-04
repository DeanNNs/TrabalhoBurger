<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idproduto = 1;
$nome ="suco de laranja";
$preco =15.00;
$descricao ="1 litro de suco de laranja";
$tipo="B";

editarProduto($conexao, $nome, $preco, $descricao, $tipo, $idproduto)
?>
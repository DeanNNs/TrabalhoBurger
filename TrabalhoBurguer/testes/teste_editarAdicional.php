<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$idadicional = 1;
$preco = "10.00";
$nome = "bolo";

editarAdicional($conexao, $preco, $nome, $idadicional);
?>
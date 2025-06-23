<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome = "Hamburger de Carne";
$preco = "15.00";
$descricao = "Pao, carne e alface";

salvarHamburguer($conexao, $nome, $preco, $descricao);
?>
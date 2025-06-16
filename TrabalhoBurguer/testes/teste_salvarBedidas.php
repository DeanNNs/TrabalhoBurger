<?php
require_once "../conexao.php";
require_once "../funcoes_hamburgeria.php";

$nome = "Hamburger de Carne";
$preco = "15.00";
$descricao = "Pao, carne e alface";

salvarBebidas($conexao, $nome, $preco, $descricao, $idhamburguer);
?>
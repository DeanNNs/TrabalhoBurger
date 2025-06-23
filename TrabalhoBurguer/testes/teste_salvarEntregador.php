<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome= "Joaquim";
$cpf = "111-222-333-02";
$telefone = "6299107632"

salvarEntregador($conexao, $nome, $cpf, $telefone);
?>
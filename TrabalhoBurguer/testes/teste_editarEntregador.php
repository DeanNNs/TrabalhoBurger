<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$identregador = 1;
$nome = "Julio";
$cpf = "333-444-555-09";
$telefone = "8277651341";

editarEntregador($conexao, $nome, $cpf, $telefone, $identregador);
?>
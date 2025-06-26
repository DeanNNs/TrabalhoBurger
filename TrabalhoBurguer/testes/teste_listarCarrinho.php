<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

echo "<pre>";
print_r(listarCarrinho($conexao));
echo "</pre>";
?>
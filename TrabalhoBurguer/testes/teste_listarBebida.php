<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes.php";

echo "<pre>";
print_r(listarBebida($conexao));
echo "</pre>";
?>
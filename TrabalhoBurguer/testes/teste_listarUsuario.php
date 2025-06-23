<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

echo "<pre>";
print_r(listarUsuario($conexao));
echo "</pre>";
?>
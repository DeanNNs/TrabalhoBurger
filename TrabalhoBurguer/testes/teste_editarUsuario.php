<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idusuario = 1;
$nome ="Jose";
$email ="jose@gmail.com";
$senha ="123456789";
$tipo="C";

editarUsuario($conexao, $nome, $email, $senha, $tipo, $idusuario);

?>
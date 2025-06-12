<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgeria.php";

$idusuario = 1;
$nome ="Jose";
$email ="rua2";
$senha ="123456789";

editarUsuario($conexao, $nome, $email, $senha, $tipo, $idusuario);

?>
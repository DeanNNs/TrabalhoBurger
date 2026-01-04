<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$idusuario = 1;
$nome ="Jose";
$telefone="5555-5555";
$email ="jose@gmail.com";
$senha ="123456789";
$tipo="C";

editarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo, $idusuario);

?>
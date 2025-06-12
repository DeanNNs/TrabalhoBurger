<?php
require_once "../conexao.php";
require_once "./funcoes_haburgeria.php";

$nome="Carlos";
$email="carlos@gmail.com";
$senha="123";
$tipo="C";

salvarUsuario($conexao, $nome, $emil, $senha, $tipo, $idusuario);
?>
<?php
require_once "../conexao.php";
require_once "./funcoes_haburgueria.php";
$nome="Carlos";
$endereco="rua2";
$telefone="123456789";
$senha="123";

salvarUsuario($conexao, $nome, $endereco, $telefone, $senha)
?>
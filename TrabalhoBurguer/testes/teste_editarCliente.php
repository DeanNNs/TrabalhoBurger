<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes.php";

$idcliente = 1;
$$nome="Jose";
$endereco="rua2";
$telefone="123456789";
$senha="321";

editarCliente($conexao, $nome, $endereco, $telefone, $senha, $idcliente);

?>
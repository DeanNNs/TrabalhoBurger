<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = "C";


if (empty($nome) or empty($telefone) or empty($email) or empty($senha)) {
    header("Location: ./formUsuario.php");
    exit();
} else {
    salvarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo);
    header("Location: ../index.php");
}

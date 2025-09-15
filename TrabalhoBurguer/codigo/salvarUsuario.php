<?php

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = "c";




if (empty($nome) or empty($telefone) or empty($email) or empty($senha) or empty($tipo)) {
    header("Location: ./formUsuario.php");
    exit();
} else {
    header("Location: ../index.php");
}
salvarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo);

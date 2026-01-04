<?php
// O getenv busca as variáveis da imagem 325. Se não existirem (seu PC), usa o padrão local.
$servidor = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$usuario  = getenv('MYSQLUSER') ?: 'root';
$senha    = getenv('MYSQLPASSWORD') ?: 'SCeAFBVMbpnExENKwKXybUVcgLbsiEAk';
$banco    = getenv('MYSQLDATABASE') ?: 'railway';
$porta    = getenv('MYSQLPORT') ?: '3306';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
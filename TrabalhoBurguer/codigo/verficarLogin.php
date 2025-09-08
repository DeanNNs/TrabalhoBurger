<?php
require_once "../conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$resultados = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultados) == 0) {
    header("Location: /codigo/formUsuario.php");
} else {
    $linha = mysqli_fetch_array($resultados);
    $senhaBanco = $linha['senha'];
    if (password_verify($senha, $senhaBanco)) {
        session_start();
        $_SESSION['logado'] = 1;
        $_SESSION['idusuario'] = $linha['idusuario'];
        header("Location: ../index.php");
    } else {
        header("Location:telaLogin.php" );
    }
}
?>
<?php
require_once "../conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($email) or empty($senha)) { 
    header("Location: telaLogin.php");
    exit();
}

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$resultados = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultados) == 0) {
    header("Location: /codigo/telaLogin.php");
} else {
    $linha = mysqli_fetch_array($resultados);
    $senhaBanco = $linha['senha'];
    if (password_verify($senha, $senhaBanco)) {
        session_start();
        $_SESSION['logado'] = 1;
        $_SESSION['idusuario'] = $linha['idusuario'];
        $_SESSION['tipo'] = $linha['tipo'];
        if (isset($_SESSION['logado']) && $_SESSION['tipo'] == 'A') {
            header("Location: ../telaAdministrador.php");
        }
        else { 
            header("Location:../index.php");
        } 
    } else {
        header("Location:telaLogin.php" );
    }
}
?>
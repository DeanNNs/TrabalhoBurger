<?php 
session_start();

// Verifica se o usuário está logado e se é do tipo A
if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== 'A') {
    header('Location: ../index.php');
    exit();
}
?>
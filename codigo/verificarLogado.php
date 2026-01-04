<?php 
session_start();

if (!isset($_SESSION['tipo']) && $_SESSION['tipo'] !== 'A') {
    header('Location: ../index.php');
    exit();
}
?>
<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id] += 1;
    } else {
        $_SESSION['carrinho'][$id] = 1;
    }
}

header("Location: telaCompra.php");
exit;

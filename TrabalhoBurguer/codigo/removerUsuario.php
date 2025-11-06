<?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $idusuario = $_GET['id'];

  deletarUsuario($conexao, $idusuario);

  header("Location: listarUsuario.php");
?>

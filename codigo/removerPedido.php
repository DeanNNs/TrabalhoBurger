<?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $idpedido = $_GET['id'];

  deletarPedido($conexao, $idpedido);

  header("Location: listarPedido.php");
  ?>
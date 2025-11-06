<?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $idproduto = $_GET['id'];

  deletarProduto($conexao, $idproduto);

  header("Location: listarProduto.php");
  ?>
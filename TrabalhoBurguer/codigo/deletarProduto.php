<?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $id = $_GET['idproduto'];

  if (deletarProduto($conexao, $idproduto)) {
    header("Location: listarProduto.php");
  } else {
    header("Location: erro.php");
  }

  ?>
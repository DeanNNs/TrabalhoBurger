<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $idusuario = $_GET['idusuario'];

  if (deletarProduto($conexao, $idproduto)) {
    header("Location: listarProduto.php");
  } else {
    header("Location: erro.php");
  }

  ?>
</body>

</html>
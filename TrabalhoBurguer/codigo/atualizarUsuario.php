<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {

        require_once "../conexao.php";
        require_once "../funcoes/funcoes_hamburgueria.php";

        $id = $_GET['id'];
        
        $usuario = pesquisarUsuarioId($conexao, $idusuario);
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $tipo = $usuario['tipo'];

        $botao = "Atualizar";
    }
    ?>
</body>
</html>
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

    $data = $_GET['data'];
    $endereco = $_GET['endereco'];

    salvarPedido($conexao, $data, $endereco);
?>
</body>
</html>
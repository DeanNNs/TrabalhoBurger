<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    echo "<form method='POST' action='adicionarCarrinho.php'>";

    $sql = "SELECT * FROM produto ORDER BY 
        CASE 
            WHEN tipo = 'H' THEN 1 
            WHEN tipo = 'B' THEN 2 
            ELSE 3 
        END, tipo ASC";

    $resultados = mysqli_query($conexao, $sql);
    
                $produtos = listarProduto($conexao);

                foreach ($produtos as $produto){
                    $idproduto = $produto['idproduto'];
           
                    echo "<a href='adicionarCarrinho.php?id=$idproduto'><img src='../imgs/adicionarCarrinho.png'></a>";
           
                }
           ?>
    <h1>TELA COMPRA</h1>
                
            

</body>
</html>
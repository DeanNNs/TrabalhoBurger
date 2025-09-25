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
    ?>

    <ul>
    <?php
                $produtos = listarProduto($conexao);

                foreach ($produtos as $produto):
            ?>
            <li>
                <input type="checkbox" name="idproduto[]" value="<?php echo $produto['idproduto'] ?>"> R$ <span><?php echo $produto['preco']; ?></span> -- <?php echo $produto['nome']; ?> </span> -- <?php echo $produto['descricao']; ?>

                <input type="number" name="quantidade[<?php echo $produto['idproduto'];?>]" value="1" min="1">
            </li>
            <?php endforeach; ?>
        </ul>

</body>
</html>
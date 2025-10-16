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

   $produtos = listarProduto($conexao);

  $sql= SELECT * 
    FROM produtos 
    ORDER BY 
  CASE 
    WHEN tipo = 'H' THEN 1
    WHEN tipo = 'B' THEN 2
    WHEN tipo = 'C' THEN 3
  END;

if (count($produtos) > 0) {
    
    foreach ($produtos as $produto) {
        $idproduto = $produto['idproduto'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        
        echo "<div class='produto'>";
        echo "<h3>$nome</h3>";
        echo "<p>Preço: R$ $preco</p>";
        echo "<button><a style='text-decoration: none;' href='adicionarCarrinho.php?id=$idproduto&preco=$preco'>Adicionar ao carrinho</a></button>";
        echo "</div>";
    }

} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>

</body>
</html>
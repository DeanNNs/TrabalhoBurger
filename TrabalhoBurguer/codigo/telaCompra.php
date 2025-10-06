<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
     <h1>TELA COMPRA</h1>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

   $produtos = listarProduto($conexao);

if (count($produtos) > 0) {
    echo "<form method='POST' action='adicionarCarrinho.php'>";
    
    foreach ($produtos as $produto) {
        $idproduto = $produto['idproduto'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        
        echo "<div class='produto'>";
        echo "<h3>$nome</h3>";
        echo "<p>Preço: R$ $preco</p>";
        echo "<button type='submit' name='idproduto' value='$idproduto'>Adicionar ao Carrinho</button>";
        echo "</div>";
    }

    echo "</form>";
} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>
   
                
            

</body>
</html>
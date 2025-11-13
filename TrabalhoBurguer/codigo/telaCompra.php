<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"></link>
</head>
<body>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

   $produtos = listarProduto($conexao);


if (count($produtos) > 0) {
    
    foreach ($produtos as $produto) {
        $idproduto = $produto['idproduto'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        $descricao = $produto['descricao'];
        
        echo "<div class='card' style='width: 18rem;'>";
        echo "<div class='card-body'>";
        echo "<h2 class='card-title'>$nome</h2>";
        echo "<p class='card-text'>$descricao</p>";
        echo "</div>";
        echo "<br><br>";
        echo "<div class='card-body'>";
        echo "<button class='btn-comprar'> <a style='text-decoration: none;'href='adicionarCarrinho.php?id=$idproduto&preco=$preco' class='card-link'>Comprar</a></button>";
        echo "</div>";
        echo "<br><br><br>";
        echo "</div>";
    }

} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>

</body>
</html>
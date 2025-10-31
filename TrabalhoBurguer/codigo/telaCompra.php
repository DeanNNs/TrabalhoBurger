<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"></link>
</head>
<style>
    .titulo-frame {
    background: linear-gradient(135deg, #ffcc00, #ffaa00);
    color: #8B4513;
    padding: 16px 24px;
    font-size: 1.4rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
    }

.titulo-frame::before {
    content: "🍔";
    font-size: 1.6rem;
}
</style>
<body>

    <div>
        <h1 class="titulo-frame">Produtos</h1>
    </div>

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
       echo "<img src='...' class='card-img-top' alt='...'>";
       echo "<div class='card-body'>";
       echo "<h2 class='card-title'>$nome</h2>";
       echo "<p class='card-text'>$descricao</p>";
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<button> <a style='text-decoration: none;'href='adicionarCarrinho.php?id=$idproduto&preco=$preco' class='card-link'>Comprar</a></button>";
        echo "</div>";
        echo "</div>";
    }

} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>

</body>
</html>
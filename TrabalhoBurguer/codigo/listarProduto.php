<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleAdministrador.css">
</head>
<body>
    <div class="produtos-container">
        <div class="produtos-header">
            <h1 class="produtos-titulo">Gerenciar Produtos</h1>
            <p class="produtos-subtitulo">Clique em remover para excluir um produto</p>
        </div>

        <?php
        require_once "../conexao.php";
        require_once "../funcoes/funcoes_hamburgueria.php";

        $produtos = listarProduto($conexao);

        if (count($produtos) > 0) {
            echo "<div class='produtos-grid'>";
            
            foreach ($produtos as $produto) {
                $idproduto = $produto['idproduto'];
                $nome = $produto['nome'];
                $preco = $produto['preco'];
                $descricao = $produto['descricao'];

                echo "<div class='card'>";
                echo "<div class='card-img-top'>Imagem do Produto</div>";
                echo "<div class='card-body'>";
                echo "<h2 class='card-title'>" . htmlspecialchars($nome) . "</h2>";
                echo "<p class='card-text'>" . htmlspecialchars($descricao) . "</p>";
                echo "<p class='card-text'><strong>Preço: R$ " . number_format($preco, 2, ',', '.') . "</strong></p>";
                echo "</div>";
                echo "<div class='card-actions'>";
                echo "<button class='botao'>";
                echo "<a href='removerProduto.php?id=$idproduto' class='card-link' onclick='return confirm(\"Tem certeza que deseja remover este produto?\")'>Remover</a>";
                echo "</button>";
                echo "</div>";
                echo "</div>";
            }
            
            echo "</div>";
        } else {
            echo "<div class='produtos-vazios'>";
            echo "<p>Nenhum produto encontrado.</p>";
            echo "</div>";
        }
        ?>

        <div style="text-align: center;">
            <a href="../telaAdministrador.php" class="voltar-link">Voltar ao Painel</a>
        </div>
    </div>
</body>
</html>
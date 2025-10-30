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

    $sql = "SELECT * FROM produto WHERE tipo = 'B'";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_produto = [];
    while ($produto = mysqli_fetch_assoc($resultados)) {
        $lista_produto[] = $produto;
    }

   
    mysqli_stmt_close($comando);

   
    if (count($lista_produto) > 0) {
      foreach ($lista_produto as $produto) {
        $idproduto = $produto['idproduto'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        $descricao = $produto['descricao'];

        echo "<div class='produto'>";
        echo "<h3>$nome</h3>";
        echo "<p>Preço: R$ $preco</p>";
        echo "<p>$descricao</p>";
        echo "<button><a style='text-decoration: none;' href='adicionarCarrinho.php?id=$idproduto&preco=$preco'>Adicionar ao carrinho</a></button>";
        echo "</div>";
    }
    } else {
        echo "<p>Nenhuma bebida encontrada.</p>";
    }
    ?>
    <br> 
    
    <button><a style="text-decoration: none" href="telaCompra.php">Voltar</a></button>
</body>
</html>
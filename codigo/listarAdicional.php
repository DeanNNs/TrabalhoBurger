<link rel="stylesheet" href="../css/style.css">
<body>
    <?php
    require_once "../conexao.php";

    $sql = "SELECT * FROM produto WHERE tipo = 'A'";
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
        echo "<p>Nenhum Adicional encontrado.</p>";
    }
    ?>
    <br> 
    <button><a style="text-decoration: none" href="telaCompra.php">Voltar</a></button>
</body>
</html>
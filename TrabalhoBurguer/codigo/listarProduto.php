<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../css/styleAdministrador.css"></link>
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
       echo "<img src='...' class='card-img-top' alt='...'>";
       echo "<div class='card-body'>";
       echo "<h2 class='card-title'>$nome</h2>";
       echo "<p class='card-text'>$descricao</p>";
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<button class='botao'> <a style='text-decoration: none;'href='removerProduto.php?id=$idproduto' class='card-link'>Remover</a></button>";
        echo "</div>";
        echo "</div>";
    }

} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>
    <br><br>
    <a href="../telaAdministrador.php">Voltar</a>
</body>
</html>

    
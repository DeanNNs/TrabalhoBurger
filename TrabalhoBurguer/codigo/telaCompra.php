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


if (count($produtos) > 0) {
    
    foreach ($produtos as $produto) {
        $idproduto = $produto['idproduto'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        $descricao = $produto['descricao'];
        

       echo <div class="card" style="width: 18rem;">
       echo <img src="..." class="card-img-top" alt="...">
       echo <div class="card-body">
       echo <h5 class="card-title">$nome</h5>
       echo <p class="card-text">$descricao</p>
        echo</div>
        echo<div class="card-body">
        echo <button> <a style='text-decoration: none;'href="adicionarCarrinho.php?id=$idproduto&preco=$preco" class="card-link">Comprar</a></button>
        echo</div>
        echo</div>


    }

} else {
    echo "<p>Nenhum produto encontrado.</p>";
}
    ?>

</body>
</html>